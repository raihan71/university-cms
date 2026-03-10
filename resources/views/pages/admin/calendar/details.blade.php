@extends('layouts.dashboard')

@section('title', 'Settings')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<style type="text/css">
    .trix-content {
        height: 200px;
        overflow-y: auto;
    }
    .trix-content .attachment {
      position: relative;
      float: left;
      max-width: 100%;
      margin: 10px 10px 10px 0;
      padding: 0;
      color: #666;
      font-size: 13px;
    }
</style>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('content')
<div class="container-fluid mb-4">
    <div class="p-1">
        @include('layouts.alert')
    </div>
    <h1 class="mt-4">Pengaturan Kalender Akademik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('portal-admin.calendar.index') }}">Daftar Kalender</a></li>
        <li class="breadcrumb-item active">Detail Kalender Akademik</li>
    </ol>
    <form action="{{ route('portal-admin.calendar.updateDetails', $calendarDetail->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kalender</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $calendarDetail->name) }}">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">File</label>
            <input type="file" accept="application/pdf" class="form-control" id="file" name="file">
            <div class="mt-2">
              <a href="{{ $calendarDetail->file ? asset('storage/' . $calendarDetail->file) : '' }}" target="_blank">Lihat File</a>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <label class="form-label" for="description">Deskripsi</label>
            </div>
            <div class="card-body">
                <input id="description_input" type="hidden" name="description" value="{{ old('description', $calendarDetail->description) }}">
                <trix-editor id="description" class="trix-content" input="description_input"></trix-editor>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    document.addEventListener('trix-file-accept', (event) => {
        const maxFileSize = 5 * 1024 * 1024; // 5MB
        if (event.file && event.file.size > maxFileSize) {
            event.preventDefault();
            alert('Ukuran file terlalu besar. Maksimal 5MB.');
        }
    });

    document.addEventListener('trix-attachment-add', (event) => {
        if (!event.attachment.file) {
            return;
        }

        uploadTrixAttachment(event.attachment);
    });

    // Ensure Trix editors show existing HTML from the database / old() helper.
    const trixInitialValues = {
        description: {!! json_encode(old('description', $calendarDetail->description)) !!},
    };

    Object.entries(trixInitialValues).forEach(([key, value]) => {
        const input = document.getElementById(`${key}_input`);
        const editor = document.querySelector(`trix-editor[input="${key}_input"]`);
        if (input) {
            input.value = value || '';
        }
        if (editor) {
            editor.editor.loadHTML(value || '');
        }
    });

    function uploadTrixAttachment(attachment) {
        if (!csrfToken) {
            console.error('CSRF token not found.');
            attachment.remove();
            return;
        }

        const formData = new FormData();
        formData.append('attachment', attachment.file);
        formData.append('_token', csrfToken);

        fetch("{{ route('portal-admin.attachments.store') }}", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Upload failed');
                }
                return response.json();
            })
            .then((data) => {
                const url = normalizeUrl(data.url || data.href);
                attachment.setAttributes({
                    url,
                    href: url,
                });
            })
            .catch((error) => {
                console.error('Attachment upload failed', error);
                attachment.remove();
            });
    }

    function normalizeUrl(url) {
        if (!url) {
            return '';
        }

        // If backend sent a relative URL like /storage/..., prefix the current origin.
        if (url.startsWith('/')) {
            return `${window.location.origin}${url}`;
        }

        return url;
    }
</script>
@endpush
