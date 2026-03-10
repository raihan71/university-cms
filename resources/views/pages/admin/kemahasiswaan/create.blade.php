@extends('layouts.dashboard')

@section('title', 'Kemahasiswaan Management')

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
  <h1 class="mt-4">Buat Kemahasiswaan Baru</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.kemahasiswaan.index') }}">Daftar Kemahasiswaan</a></li>
      <li class="breadcrumb-item active">Buat Kemahasiswaan Baru</li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.kemahasiswaan.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" placeholder="Contoh: Kemahasiswaan A" id="name" name="name" required>
          </div>
          <div class="card mb-3">
              <div class="card-header">
                  <label class="form-label" for="description">Konten Isi</label>
              </div>
              <div class="card-body">
                  <input id="description_input" type="hidden" name="description" required>
                  <trix-editor id="description" class="trix-content" input="description_input"></trix-editor>
              </div>
          </div>
          <div class="form-group">
              <label for="link">Link</label>
              <input type="text" class="form-control" placeholder="Contoh: https://example.com atau konseling (tanpa link, kecil)" id="link" name="link">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
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