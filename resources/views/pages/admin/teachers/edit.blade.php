@extends('layouts.dashboard')

@section('title', 'Dosen Management')

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
  <h1 class="mt-4">Edit Dosen</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{ route('portal-admin.teachers.index') }}">Daftar Dosen</a></li>
      <li class="breadcrumb-item active">Edit Dosen</li>
      <li class="breadcrumb-item"><a href="{{ route('profile.teachers.show', $teacher->id) }}">{{ $teacher->name }}</a></li>
  </ol>
  <div class="card">
    <div class="card-body">
      <form action="{{ route('portal-admin.teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" placeholder="Masukkan nama lengkap dengan gelar" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
          </div>
        <div class="form-group">
            <label for="isCode">No Induk</label>
            <select class="form-control" id="isCode" name="isCode">
                <option value="" disabled selected>Pilih No Induk</option>
                <option value="niy" {{ $teacher->isCode == 'niy' ? 'selected' : '' }}>NIY</option>
                <option value="nip" {{ $teacher->isCode == 'nip' ? 'selected' : '' }}>NIP</option>
                <option value="nidn" {{ $teacher->isCode == 'nidn' ? 'selected' : '' }}>NIDN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nip">Nomor Induk</label>
            <input type="text" placeholder="Masukkan NIP/NIDN/NIY" class="form-control" id="nip" name="nip" value="{{ $teacher->nip }}">
          </div>
          <div class="card mb-3">
              <div class="card-header">
                  <label class="form-label" for="bio">Bio/Profil Lengkap</label>
              </div>
              <div class="card-body">
                  <input id="bio_input" type="hidden" name="bio">
                  <trix-editor id="bio" class="trix-content" input="bio_input"></trix-editor>
              </div>
          </div>
          <div class="form-group">
              <label for="photo">Foto</label>
              <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Masukkan email" id="email" name="email" value="{{ $teacher->email }}" required>
          </div>
          <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Masukkan nomor telepon" id="phone" name="phone" value="{{ $teacher->phone }}">
          </div>
          <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" placeholder="Masukkan alamat" id="address" name="address" value="{{ $teacher->address }}">
          </div>
          <div class="form-group">
            <label for="subject">Mata Kuliah</label>
            <input type="text" placeholder="Masukkan mata kuliah yang diajarkan" class="form-control" id="subject" name="subject" value="{{ $teacher->subject }}">
          </div>
          <div class="form-group">
              <label for="prodi">Prodi</label>
              <select class="form-control" id="prodi" name="prodi" required>
                <option value="" disabled selected>Pilih Prodi</option>
                @foreach($courses as $course)
                    <option value="{{ $course->slug }}" {{ $course->slug == $teacher->prodi ? 'selected' : '' }}>{{ $course->name }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="role">Jabatan</label>
            <input type="text" placeholder="Masukkan jabatan dosen jika ada" class="form-control" id="role" name="role" value="{{ $teacher->role }}">
          </div>
          <div class="form-group">
              <label for="linkedin">LinkedIn</label>
              <input type="url" class="form-control" placeholder="Masukkan URL LinkedIn" id="linkedin" name="linkedin" value="{{ $teacher->linkedin }}">
          </div>
          <div class="form-group">
              <label for="twitter">Twitter</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Twitter" id="twitter" name="twitter" value="{{ $teacher->twitter }}">
          </div>
          <div class="form-group">
              <label for="instagram">Instagram</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Instagram" id="instagram" name="instagram" value="{{ $teacher->instagram }}">
          </div>
          <div class="form-group">
              <label for="facebook">Facebook</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Facebook" id="facebook" name="facebook" value="{{ $teacher->facebook }}">
          </div>
          <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" placeholder="Masukkan URL Website" id="website" name="website" value="{{ $teacher->website }}">
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

    const trixInitialValues = {
        bio: {!! json_encode(old('bio', $teacher->bio)) !!},
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