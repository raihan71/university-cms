<div class="mobile-menu-area">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="mobile-menu">
                  <nav id="dropdown">
                      <ul>
                          <li class="{{ request()->is('/') ? 'active' : '' }}">
                              <a href="{{ route('frontpage') }}">Beranda</a>
                          </li>
                          <li class="{{ request()->routeIs('profile.*') ? 'active' : '' }}">
                              <a href="javascript:;">Profil</a>
                              <ul>
                                  <li><a href="{{ route('profile.about', ['about' => 'history']) }}">Sejarah Kampus</a></li>
                                  <li><a href="{{ route('profile.about', ['about' => 'vision']) }}">Visi & Misi</a></li>
                                  <li><a href="{{ route('profile.about', ['about' => 'leadership']) }}">Pimpinan Institusi</a></li>
                                  <li><a href="{{ route('profile.about', ['about' => 'structure']) }}">Struktur Organisasi</a></li>
                                  <li><a href="{{ route('profile.about', ['about' => 'accreditation']) }}">Akreditasi Institusi</a></li>
                                  <li><a href="{{ route('profile.about', ['about' => 'identity']) }}">Identitas Institusi</a></li>
                                  <li><a href="{{ route('profile.teachers.index') }}">Staff & Dosen</a></li>
                              </ul>
                          </li>
                          <li class="{{ request()->routeIs('academic.*') ? 'active' : '' }}">
                              <a href="javascript:;">Akademik</a>
                              <ul>
                                  <li class="has-child-menu">
                                      <a href="javascript:;">Program Studi</a>
                                      <ul class="thired-level">
                                          @foreach($courses as $course)
                                              <li><a href="{{ route('academic.courses.show', $course->slug) }}">{{ $course->name }}</a></li>
                                          @endforeach
                                      </ul>
                                  </li>
                                  <li><a href="{{ route('academic.calendar') }}">Kalender Akademik</a></li>
                                  <li><a href="{{ route('academic.rules') }}">Peraturan & Pedoman</a></li>
                                  <li><a href="#">Layanan Akademik</a></li>
                                  <li><a href="{{ route('academic.facilities') }}">Fasilitas Akademik</a></li>
                              </ul>
                          </li>
                          <li class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                              <a href="javascript:;">Layanan</a>
                              <ul>
                                  <li class="has-child-menu">
                                      <a href="javascript:;">Kemahasiswaan</a>
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
                                  <li class="has-child-menu">
                                      <a href="javascript:;">BAAK</a>
                                      <ul class="thired-level">
                                          <li><a href="{{ route('services.pmb.show') }}">Panduan Pembayaran</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="https://lpm.stitalazamicjr.ac.id/" target="_blank">LPM</a></li>
                                  <li><a href="https://lppm.stitalazamicjr.ac.id/" target="_blank">LPPM</a></li>
                                  <li><a href="#">Al-Azami Press</a></li>
                              </ul>
                          </li>
                          <li class="{{ request()->routeIs('info.*') ? 'active' : '' }}">
                              <a href="javascript:void(0)">Informasi</a>
                              <ul>
                                  <li class="has-child-menu">
                                      <a href="#">PMB</a>
                                      <ul class="thired-level">
                                          <li><a href="{{ route('info.pmb.show', 'register') }}">Informasi Pendaftaran</a></li>
                                          <li><a href="{{ route('info.pmb.show', 'pedoman') }}">Pedoman PMB</a></li>
                                          <li><a href="{{ route('info.pmb.show', 'brosur') }}">Brosur PMB</a></li>
                                          <li><a href="{{ route('info.pmb.show', 'beasiswa') }}">Jalur Beasiswa</a></li>
                                          <li><a href="{{ route('info.pmb.show', 'transfer') }}">Jalur Pindahan</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="{{ route('info.news.type', 'announcement') }}">Pengumuman</a></li>
                                  <li><a href="{{ route('info.news.type', 'news') }}">Berita</a></li>
                                  <li><a href="{{ route('info.events.index') }}">Acara</a></li>
                                  <li><a href="{{ route('info.gallery') }}">Galeri</a></li>
                              </ul>
                          </li>
                          <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                              <a href="{{ route('contact') }}">Kontak</a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</div>
