@extends('layouts.master')

@section('title', 'Panduan Pembayaran')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area pt-30" style="background: url('{{ asset('img/course/course-detail.jpg') }}'); background-position: contain;">
    <div class="container">
        <div class="pagination-area mt-30">
            <h1>Panduan Pembayaran</h1>
            <ul>
                <li><a href="{{ route('frontpage') }}">Beranda</a></li>
                <li style="margin: 10px">/</li>
                <li style="margin: 10px">Layanan</li>
                <li style="margin: 10px">/</li>
                <li>Panduan Pembayaran</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="about-page1-area">
    <div class="container">
        <h2 class="title-default-left">Panduan Pembayaran Uang Kuliah Tunggal (UKT)</h2>
        <p>Pembayaran UKT dapat dilakukan melalui mekanisme transfer bank lain sesuai petunjuk di bawah ini.</p>
        <div class="row about-page1-inner">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                      <h3 class="sidebar-title">Instruksi Umum Pembayaran</h3>
                      <p>Untuk melakukan pembayaran, silakan ikuti langkah-langkah berikut:</p>
                      <ul style="list-style-type: disc; padding-left: 20px;">
                          <li>Pembayaran dilakukan setiap awal semester (Ganjil dan Genap).</li>
                          <li>Wajib mencantumkan Nomor Induk Mahasiswa (NIM) atau Nomor Pendaftaran sebagai keterangan.</li>
                          <li>Simpan bukti transfer atau struk pembayaran.</li>
                      </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h3 class="sidebar-title">Rekening Pembayaran Resmi</h3>
                        <p>Silakan transfer pembayaran ke salah satu rekening resmi berikut:</p>
                        <table class="table table-bordered table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Jenis Pembayaran</th>
                              <th scope="col">Bank</th>
                              <th scope="col">Nomor Rekening</th>
                              <th scope="col">Atas Nama</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($payment as $item)
                              <tr>
                                <td>
                                  @foreach ($categories as $category)
                                    @if ($category['value'] === $item->type)
                                      {{ $category['label'] }}
                                    @endif
                                  @endforeach
                                </td>
                                <td>{{ $item->bank }}</td>
                                <td>{{ $item->norek }}</td>
                                <td>{{ $item->name }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 15px;">
                <div class="alert alert-warning" role="alert">
                <strong>Hati-hati,</strong> {{ config('app.name') }} tidak pernah meminta transfer dana ke rekening pribadi staf atau dosen. Waspada penipuan!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
