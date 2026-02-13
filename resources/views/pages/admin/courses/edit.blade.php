@extends('layouts.dashboard')

@section('title', 'Course Management')

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
  <h1 class="mt-4">Edit Program</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.courses.index') }}">Daftar Program</a></li>
      <li class="breadcrumb-item active">Edit Program</li>
      <li class="breadcrumb-item active">{{ $courses->name }}</li>
  </ol>
  <div class="card">
    <div class="card-body">
        <form action="{{ route('portal-admin.courses.update', $courses->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="name">Nama Program Studi</label>
              <input autocomplete="off" type="text" class="form-control" id="name" name="name" value="{{ $courses->name }}" required>
          </div>
          <div class="form-group">
              <label for="description">Deskripsi Program</label>
              <textarea class="form-control" id="description" name="description" rows="3" required>{{ $courses->description }}</textarea>
          </div>
          <div class="card mb-3">
              <div class="card-header">
                  <label class="form-label" for="content">Konten Program</label>
              </div>
              <div class="card-body">
                  <input id="content_input" type="hidden" name="content">
                  <trix-editor id="content" class="trix-content" input="content_input"></trix-editor>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('portal-admin.courses.index') }}" class="btn btn-secondary ml-2">Batal</a>
      </form>
    </div>
  </div>
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

    const trixInitialValues = {
        content: {!! json_encode(old('content', $courses->content)) !!},
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