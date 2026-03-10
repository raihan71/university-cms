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
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{route('frontpage')}}">Beranda</a>
                            </li>
                            <li class="{{ request()->routeIs('profile.*') ? 'active' : '' }}"><a href="javascript:;">Profil</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'history']) }}">Sejarah Kampus</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'vision']) }}">Visi & Misi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'leadership']) }}">Pimpinan Institusi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'structure']) }}">Struktur Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'accreditation']) }}">Akreditasi Institusi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.about', ['about' => 'identity']) }}">Identitas Institusi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.teachers.index') }}">Staff & Dosen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('academic.*') ? 'active' : '' }}"><a href="javascript:;">Akademik</a>
                                <ul>
                                    <li class="has-child-menu"><a href="javascript:;">Program Studi</a>
                                        <ul class="thired-level">
                                            @foreach($courses as $course)
                                                <li><a href="{{route('academic.courses.show', $course->slug)}}">{{ $course->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('academic.calendar') }}">Kalender Akademik</a></li>
                                    <li><a href="{{ route('academic.rules') }}">Peraturan & Pedoman</a></li>
                                    <li><a href="">Layanan Akademik</a></li>
                                    <li><a href="{{ route('academic.facilities') }}">Fasilitas Akademik</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('services.*') ? 'active' : '' }}"><a href="javascript:;">Layanan</a>
                                <ul>
                                    <li class="has-child-menu"><a href="javascript:;">Kemahasiswaan</a>
                                        <ul class="thired-level">
                                            @foreach($kemahasiswaans as $kemahasiswaan)
                                                @if (Str::startsWith($kemahasiswaan->link, ['http', 'https']))
                                                    <li><a href="{{ $kemahasiswaan->link }}" target="_blank">{{ $kemahasiswaan->name }}</a></li>
                                                @else
                                                <li><a href="{{ route('services.show', $kemahasiswaan->link) }}">{{ $kemahasiswaan->name }}</a></li>
                                                @endif
                                            @endforeach
                                            <li><a href="{{ route('services.scholarships.show') }}">Beasiswa</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child-menu"><a href="gallery1.html">BAK</a>
                                        <ul class="thired-level">
                                            <li><a href="gallery1.html">Panduan Pembayaran</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://lpm.stitalazamicjr.ac.id/" target="_blank">LPM</a></li>
                                    <li><a href="https://lppm.stitalazamicjr.ac.id/" target="_blank">LPPM</a></li>
                                    <li><a href="#">Al-Azami Press</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('info.*') ? 'active' : '' }}"><a href="javascript:void(0)">Informasi</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">PMB</a>
                                        <ul class="thired-level">
                                            <li><a href="gallery1.html">Informasi Pendaftaran</a></li>
                                            <li><a href="gallery2.html">Pedoman PMB</a></li>
                                            <li><a href="single-gallery.html">Brosur PMB</a></li>
                                            <li><a href="single-gallery.html">Jalur Beasiswa</a></li>
                                            <li><a href="single-gallery.html">Jalur Pindahan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('info.news.type', 'announcement') }}">Pengumuman</a></li>
                                    <li><a href="{{ route('info.news.type', 'news') }}">Berita</a></li>
                                    <li><a href="{{ route('info.events.index') }}">Acara</a></li>
                                    <li><a href="{{ route('info.gallery') }}">Galeri</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Kontak</a></li>
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