<div id="header3" class="header3-area">
    <div class="header-top-area">
        <div class="container">
            <div class="top-bar-border">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890">{{ $universities->phone }}</a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">{{ $universities->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="logo-area">
                        <a href="/" style="display: flex; align-items: center;">
                            <img class="img-responsive" width="50" src="{{ $universities->logo ? asset('storage/' . $universities->logo) : asset('img/logo-textprimary.png') }}" alt="logo">
                            <h3 class="logo-title">{{ $universities->name }}</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <nav id="desktop-nav">
                        <ul>
                            <li class="active"><a href="{{route('frontpage')}}">Beranda</a>
                            </li>
                            <li><a href="javascript:;">Profil</a>
                                <ul>
                                    <li>
                                        <a href="lecturers1.html">Sejarah Kampus</a>
                                    </li>
                                    <li>
                                        <a href="lecturers2.html">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a href="pricing1.html">Pimpinan Institusi</a>
                                    </li>
                                    <li>
                                        <a href="pricing2.html">Struktur Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="pricing3.html">Akreditasi Institusi</a>
                                    </li>
                                    <li>
                                        <a href="pricing4.html">Identitas Institusi</a>
                                    </li>
                                    <li>
                                        <a href="pricing4.html">Staff & Dosen</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Akademik</a>
                                <ul>
                                    <li class="has-child-menu"><a href="courses1.html">Program Studi</a>
                                        <ul class="thired-level">
                                            <li><a href="news1.html">News 1</a></li>
                                            <li><a href="news2.html">News 2</a></li>
                                            <li><a href="single-news.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="courses2.html">Kalender Akademik</a></li>
                                    <li><a href="courses3.html">Peraturan & Pedoman</a></li>
                                    <li><a href="single-courses1.html">Layanan Akademik</a></li>
                                    <li><a href="single-courses2.html">Fasilitas Akademik</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Layanan</a>
                                <ul>
                                    <li class="has-child-menu"><a href="gallery1.html">Kemahasiswaan</a>
                                        <ul class="thired-level">
                                            <li><a href="gallery1.html">UKM</a></li>
                                            <li><a href="gallery2.html">Beasiswa</a></li>
                                            <li><a href="single-gallery.html">Layanan Konseling</a></li>
                                            <li><a href="single-gallery.html">Alumni & Tracer Study</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child-menu"><a href="gallery1.html">BAK</a>
                                        <ul class="thired-level">
                                            <li><a href="gallery1.html">UKM</a></li>
                                            <li><a href="gallery2.html">Beasiswa</a></li>
                                            <li><a href="single-gallery.html">Layanan Konseling</a></li>
                                            <li><a href="single-gallery.html">Alumni & Tracer Study</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">LPM</a>
                                    <li><a href="">LPPM</a></li>
                                    <li><a href="">Al-Azami Press</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Informasi</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">PMB</a>
                                        <ul class="thired-level">
                                            <li><a href="gallery1.html">UKM</a></li>
                                            <li><a href="gallery2.html">Beasiswa</a></li>
                                            <li><a href="single-gallery.html">Layanan Konseling</a></li>
                                            <li><a href="single-gallery.html">Alumni & Tracer Study</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pengumuman</a></li>
                                    <li><a href="#">Berita</a></li>
                                    <li><a href="#">Acara</a></li>
                                    <li><a href="#">Galeri</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-1 col-md-1 hidden-sm">
                    <div class="header-search">
                        <form>
                            <input type="text" class="search-form" placeholder="Search...." required="">
                            <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>