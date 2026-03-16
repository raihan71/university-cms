@extends('layouts.master')

@section('title',  $pmb === 'register' ? 'Informasi Pendaftaran' : ($pmb === 'pedoman' ? 'Pedoman PMB' : ($pmb === 'brosur' ? 'Brosur PMB' : ($pmb === 'beasiswa' ? 'Jalur Beasiswa' : ($pmb === 'transfer' ? 'Jalur Pindahan' : 'Informasi PMB')))))

@push('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
@endpush

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background: url('{{ asset('img/building3.jpg') }}'); background-position: top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>{{ $pmb === 'register' ? 'Informasi Pendaftaran' : ($pmb === 'pedoman' ? 'Pedoman PMB' : ($pmb === 'brosur' ? 'Brosur PMB' : ($pmb === 'beasiswa' ? 'Jalur Beasiswa' : ($pmb === 'transfer' ? 'Jalur Pindahan' : 'Informasi PMB')))) }}</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Informasi</li>
                <li style="margin: 10px">/</li>
                <li>{{ $pmb === 'register' ? 'PMB' : ($pmb === 'pedoman' ? 'Pedoman PMB' : ($pmb === 'brosur' ? 'Brosur PMB' : ($pmb === 'beasiswa' ? 'Jalur Beasiswa' : ($pmb === 'transfer' ? 'Jalur Pindahan' : 'Informasi PMB')))) }}</li>
            </ul>
        </div>
    </div>
</div>
@if ($pmb === 'register')
<div class="about-page2-area">
    <div class="container" style="padding-bottom: 2%">
       <div class="row about-page2-inner">
        <h2 class="about-title">Penerimaan Mahasiswa Baru</h2>
        <h4 class="about-sub-title">Tahun Akademik {{ date('Y') }}/{{ date('Y') + 1 }}</h4>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="title-default-left">Jadwal dan Tahapan Penting</h2>
            <p>Berikut adalah jadwal dan tahapan penting dalam proses pendaftaran mahasiswa baru:</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Jalur Pendaftaran</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Tanggal Ujian Seleksi</th>
                        <th>Tanggal Pengumuman Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pmbs as $pmb)
                    <tr>
                        <td>{{ $pmb->path_register }}</td>
                        <td>{{ $pmb->date_register ? \Carbon\Carbon::parse($pmb->date_register)->format('d M Y') : 'Belum ditentukan' }}</td>
                        <td>{{ $pmb->date_test ? \Carbon\Carbon::parse($pmb->date_test)->format('d M Y') : 'Belum ditentukan' }}</td>
                        <td>{{ $pmb->date_result ? \Carbon\Carbon::parse($pmb->date_result)->format('d M Y') : 'Belum ditentukan' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pmbs->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
       </div>
    </div>
    <div class="container" style="padding-bottom: 2%">
      <div class="row about-page2-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="title-default-left">Syarat Pendaftaran Umum Calon Mahasiswa</h2>
            <ul>
              <li>Wajib memiliki Ijazah/Surat Keterangan Lulus (SKL) dari SMA/SMK/MA/Sederajat.</li>
              <li>Mengisi Formulir Pendaftaran Online melalui portal resmi PMB STIT Al-Azami.</li>
              <li>Fotokopi Ijazah/SKL yang telah dilegalisir (2 lembar).</li>
              <li>Fotokopi Kartu Tanda Penduduk (KTP) dan Kartu Keluarga (KK) (2 lembar).</li>
              <li>Pas Foto berwarna terbaru ukuran 3x4 (2 lembar).</li>
              <li>Membayar biaya pendaftaran sebesar Rp. [Nominal Biaya Pendaftaran] (Bukti transfer wajib di-upload).</li>
              <li>Mengikuti Ujian Seleksi Masuk yang diselenggarakan oleh Kampus sesuai jadwal yang ditetapkan.</li>
              <li>Bagi yang memilih Program Studi PAI, diutamakan memiliki latar belakang pendidikan pesantren atau madrasah.</li>
            </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row about-page2-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="title-default-left">Biaya Kuliah & Pendaftaran</h2>
            <ul style="padding-bottom: 3%">
                <li>
                <strong>Biaya Pendaftaran:</strong> 
                <br>
                Setiap calon mahasiswa diwajibkan membayar biaya pendaftaran/seleksi sebesar Rp. 300.000,- (Tiga Ratus Ribu Rupiah). Pembayaran dilakukan satu kali saat pengisian formulir online dan tidak dapat ditarik kembali.
                </li>
                <li>
                <strong>Uang Kuliah Tunggal (UKT):</strong> 
                <br>
                Institusi menerapkan sistem Uang Kuliah Tunggal (UKT) yang dibayarkan setiap semester. Besaran UKT bervariasi tergantung program studi, namun berada dalam rentang Rp. 2.500.000,- hingga Rp. 3.500.000,- per semester (atau sesuai kebijakan Kemenag/Yayasan). UKT sudah mencakup semua biaya akademik, termasuk SPP, SKS, dan biaya praktikum standar.
                </li>
            </ul>
          <i style="padding-top: 3%">Untuk rincian biaya yang lebih detail dan informasi angsuran, silakan merujuk pada sub-menu Panduan Pembayaran di menu LAYANAN.</i>
        </div>
      </div>
    </div>
</div>
@elseif($pmb === 'pedoman')
<div class="about-page2-area">
    <div class="container">
      <div class="row about-page2-inner">
        <h2 class="about-title">Pedoman Penerimaan Mahasiswa Baru</h2>
        <h4 class="about-sub-title">Pedoman ini berisi informasi lengkap dan rinci mengenai seluruh proses seleksi, ketentuan akademik awal, hingga prosedur daftar ulang calon mahasiswa baru STIT Al-Azami.</h4>
      </div>
    </div>
    <div class="container" style="padding-bottom: 2%">
      <div class="row about-page2-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="title-default-left">Ringkasan Poin Penting Pedoman</h2>
            <ul>
              <li><strong>Ketentuan Umum</strong>
                <br>
                Persyaratan Ijazah, Batas Usia, Kesehatan.
              </li>
              <li><strong>Prosedur Pendaftaran</strong>
                <br>
                Langkah-langkah mengisi formulir, proses pembayaran, dan upload dokumen.
              </li>
              <li><strong>Ketentuan Daftar Ulang</strong>
                <br>
                Dokumen yang wajib dibawa saat verifikasi fisik dan prosedur pelunasan UKT semester pertama.
              </li>
            </ul>
        </div>
      </div>
    </div>
    <div class="container" style="padding-bottom: 1%">
      <div class="row about-page2-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="about-page-content-holder">
              <div class="content-box">
                  <a href="{{ asset('storage/' . $pmbDetail->file) }}" target="_blank" class="btn btn-primary">Unduh Pedoman PMB</a>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row about-page2-inner">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="about-page-content-holder">
              <div class="content-box">
                <div class="alert alert-warning" role="alert">
                    <strong>Catatan:</strong> Pastikan Anda membaca seluruh isi Pedoman PMB dan menghubungi Panitia jika terdapat keraguan.
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
@elseif($pmb === 'brosur')
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Brosur Penerimaan Mahasiswa Baru</h2>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                      {!! $pmbDetail->description !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="about-page-content-holder">
                  <div class="content-box">
                      <img src="{{ asset('storage/' . $pmbDetail->gambar) }}" width="500" alt="Brosur PMB" class="img-responsive img-thumbnail">
                  </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                  <div class="content-box">
                    <a href="{{ asset('storage/' . $pmbDetail->gambar) }}" target="_blank" class="btn btn-primary">Unduh Brosur PMB</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@elseif($pmb === 'beasiswa')
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left text-center">Jalur Penerimaan Beasiswa KIP-Kuliah (KIP-K)</h2>
        <p style="font-style: italic; margin-bottom: 40px;">
            STIT Al-Azami merupakan salah satu Perguruan Tinggi yang ditunjuk oleh KEMENAG
            untuk menyalurkan Beasiswa KIP-Kuliah.
        </p>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h3 class="title-default-left">Syarat Pendaftaran Khusus KIP-K</h3>
                        <ul class="list-unstyled" style="margin-bottom: 40px;">
                            <li class="mb-10">
                                <i class="fa fa-file-text-o text-primary"></i>
                                Terdaftar sebagai peserta KIP-Kuliah melalui laman resmi puslapdik.kemdikbud.go.id
                                (wajib memiliki Nomor Pendaftaran KIP-K).
                            </li>
                            <li class="mb-10">
                                <i class="fa fa-file-text-o text-primary"></i>
                                Berasal dari keluarga miskin/rentan miskin (dibuktikan dengan KKS/KIP/SKTM).
                            </li>
                            <li class="mb-10">
                                <i class="fa fa-file-text-o text-primary"></i>
                                Calon mahasiswa baru yang lulus pada tahun berjalan atau maksimal 2 tahun sebelumnya.
                            </li>
                            <li>
                                <i class="fa fa-file-text-o text-primary"></i>
                                Bersedia mengikuti seleksi serta wawancara dari Panitia Kampus.
                            </li>
                        </ul>

                        <h3 class="title-default-left">Alur Pendaftaran di STIT Al-Azami</h3>
                        <div class="panel-group" id="kipSteps" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="stepOneHeading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#kipSteps" href="#stepOne" aria-expanded="true" aria-controls="stepOne">
                                            Langkah 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="stepOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="stepOneHeading">
                                    <div class="panel-body">
                                        Mengisi formulir pendaftaran KIP-K STIT Al-Azami dan memastikan data diri sesuai dengan informasi di akun KIP-Kuliah.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="stepTwoHeading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kipSteps" href="#stepTwo" aria-expanded="false" aria-controls="stepTwo">
                                            Langkah 2
                                        </a>
                                    </h4>
                                </div>
                                <div id="stepTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stepTwoHeading">
                                    <div class="panel-body">
                                        Mengunggah dokumen persyaratan (rapor, surat keterangan tidak mampu, kartu keluarga, dan lainnya) sesuai petunjuk panitia.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="stepThreeHeading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kipSteps" href="#stepThree" aria-expanded="false" aria-controls="stepThree">
                                            Langkah 3
                                        </a>
                                    </h4>
                                </div>
                                <div id="stepThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stepThreeHeading">
                                    <div class="panel-body">
                                        Mengikuti seleksi tertulis dan wawancara sesuai jadwal yang ditetapkan oleh panitia PMB STIT Al-Azami.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="stepFourHeading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#kipSteps" href="#stepFour" aria-expanded="false" aria-controls="stepFour">
                                            Langkah 4
                                        </a>
                                    </h4>
                                </div>
                                <div id="stepFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stepFourHeading">
                                    <div class="panel-body">
                                        Menunggu pengumuman hasil seleksi serta melakukan verifikasi ulang data dan berkas apabila dinyatakan lolos.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($pmb === 'transfer')
<div class="about-page1-area">
  <div class="container">
      <h2 class="title-default-left text-center">Jalur Pindahan dan Mahasiswa Transfer</h2>
      <p style="font-style: italic; margin-bottom: 40px;">
          STIT Al-Azami membuka kesempatan bagi mahasiswa dari Perguruan Tinggi lain yang ingin pindah
          atau melanjutkan studi ke Program Studi PAI atau PIAUD.
      </p>
      <div class="row about-page1-inner">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="about-page-content-holder">
                  <div class="content-box">
                      <h3 class="title-default-left">Persyaratan Khusus Mahasiswa Pindahan/Transfer</h3>
                      <ul class="list-unstyled" style="margin-bottom: 30px;">
                          <li class="mb-10">
                              <i class="fa fa-exchange text-primary"></i>
                              Berasal dari Perguruan Tinggi terakreditasi minimal sama dengan PT asal.
                          </li>
                          <li class="mb-10">
                              <i class="fa fa-exchange text-primary"></i>
                              Melampirkan Surat Keterangan Pindah dari perguruan tinggi asal.
                          </li>
                          <li class="mb-10">
                              <i class="fa fa-exchange text-primary"></i>
                              Menyerahkan transkrip nilai akademik dengan IPK minimal 2.75 (atau sesuai ketentuan panitia).
                          </li>
                          <li class="mb-10">
                              <i class="fa fa-exchange text-primary"></i>
                              Jumlah SKS yang diakui minimal sesuai ketentuan PMB (misal 24 SKS) dan maksimal mengikuti batas konversi program studi.
                          </li>
                          <li>
                              <i class="fa fa-exchange text-primary"></i>
                              Tidak pernah dikenakan sanksi akademik atau terlibat kasus kriminal.
                          </li>
                      </ul>

                      <h3 class="title-default-left">Prosedur Konversi Nilai dan Mata Kuliah</h3>
                      <p><strong>Proses:</strong> Mata kuliah yang diakui dan dikonversi adalah mata kuliah setara silabus STIT Al-Azami dengan nilai minimal B.</p>
                      <p><strong>Verifikasi:</strong> Konversi dilakukan oleh Wakil Ketua I Bidang Akademik bersama Kaprodi setelah berkas diterima lengkap.</p>

                      <h3 class="title-default-left">Jadwal dan Kontak Layanan</h3>
                      <p><strong>Waktu Pendaftaran:</strong> Jalur Pindahan dibuka menjelang awal semester Ganjil dan Genap.</p>
                      <p><strong>Kontak:</strong> Hubungi layanan BAAK (Biro Administrasi Akademik) melalui nomor kontak resmi untuk konsultasi sebelum mendaftar.</p>
                      <a href="https://wa.me/${{ $university->phone }}" target="_blank" class="btn btn-primary">
                          <i class="fa fa-whatsapp"></i> Hubungi BAAK (Layanan Pindahan)
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endif

@stop
