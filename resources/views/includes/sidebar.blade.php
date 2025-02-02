<aside id="sidebar-wrapper">
  <div class="sidebar-brand sidebar-custom">
    <div class="row justify-content-center" style="margin-top: 10px">
      <img src="{{ asset('img/unesa-bw.png') }}" alt="">
      <div class="column" style="max-height: 10px">
        <p>Sistem</p>
        <p style="margin-left:20px;margin-top:-10px">Keuangan</p>
      </div>
    </div>
  </div>
  <div class="sidebar-brand sidebar-custom sidebar-custom-sm">
    <img src="{{ asset('img/unesa-bw.png') }}" alt="">
  </div>
  <div class="sidebar-brand">
    <div class="row justify-content-center mt-2">
      <div class="nav-link-user-custom">
        <img alt="image" src="{{ asset('stisla-master/assets/img/avatar/avatar-1.png') }}"
          class="rounded-circle mr-1" />
      </div>
      <a href="#" style="margin-top: 3px; margin-left:15px">SIPERAN</a>
    </div>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">SP</a>
  </div>
  <ul class="sidebar-menu">
    <li class="nav-item dropdown active">
      <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i>
        <span>Data Master</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/data-guru">Data Guru</a></li>
        <li><a class="nav-link" href="/data-siswa">Data Kelas</a></li>
        <li><a class="nav-link" href="#">Data Siswa</a></li>
        <li><a class="nav-link" href="#">Jenis Transaksi</a></li>
        <li><a class="nav-link" href="#">Tanggal Merah</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Kas Masuk</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="#">Data Guru</a></li>
        <li><a class="nav-link" href="#">Data Kelas</a></li>
        <li><a class="nav-link" href="#">Data Siswa</a></li>
        <li><a class="nav-link" href="#">Jenis Transaksi</a></li>
        <li><a class="nav-link" href="#">Tanggal Merah</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Kas Keluar</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="#">Data Guru</a></li>
        <li><a class="nav-link" href="#">Data Kelas</a></li>
        <li><a class="nav-link" href="#">Data Siswa</a></li>
        <li><a class="nav-link" href="#">Jenis Transaksi</a></li>
        <li><a class="nav-link" href="#">Tanggal Merah</a></li>
      </ul>
    </li>

    <li>
      <a class="nav-link" href="#"><i class="far fa-chart-bar"></i> <span>Pembayaran Gaji</span></a>
    </li>

  </ul>

  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>
</aside>
