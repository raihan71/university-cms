<aside class="d-flex flex-column min-vh-100 border-end bg-dark overflow-y-auto" style="width: 300px;">
  <div class="sidebar p-3">
    <ul class="nav flex-column">
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.dashboard') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.dashboard')}}"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.settings.index') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.settings.index')}}"><i class="fa fa-cog"></i> Pengaturan Kampus</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.banners.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.banners.index')}}"><i class="fa fa-image"></i> Banner</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.courses.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.courses.index')}}"><i class="fa fa-book"></i> Program Studi</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.teachers.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.teachers.index')}}"><i class="fa fa-chalkboard-teacher"></i> Pengajar/Dosen</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.news.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.news.index')}}"><i class="fa fa-newspaper"></i> Pengumuman</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.events.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.events.index')}}"><i class="fa fa-calendar"></i> Acara</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.partners.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.partners.index')}}"><i class="fa fa-handshake"></i> Partner/Mitra</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link {{ request()->routeIs('portal-admin.socials.*') ? 'active fw-bold text-primary' : '' }}" href="{{route('portal-admin.socials.index')}}"><i class="fa fa-share-alt"></i> Sosial Media</a>
      </li>
    </ul>
  </div>
</aside>
