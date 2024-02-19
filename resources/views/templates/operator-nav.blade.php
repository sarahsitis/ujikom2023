<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{{ (Request::is('dashboard') ? 'active bg-gradient-primary' : '') }}}" href="{{ url('dashboard')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{{ (Request::is('jenis') ? 'active bg-gradient-primary' : '') }}}" href="{{ url('jenis') }} ">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Jenis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{{ (Request::is('menu') ? 'active bg-gradient-primary' : '') }}}" href="{{ url('menu') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{{ (Request::is('order') ? 'active bg-gradient-primary' : '') }}}" href="{{ url('order') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">view_in_ar</i>
          </div>
          <span class="nav-link-text ms-1">Order</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link text-white " href="{{ url('laporan') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
          </div>
          <span class="nav-link-text ms-1">Laporan</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link text-white {{{ (Request::is('reservasi') ? 'active bg-gradient-primary' : '') }}}" href="{{ url('reservasi') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">notifications</i>
          </div>
          <span class="nav-link-text ms-1">Reservasi</span>
        </a>
      </li>
      {{-- <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Admin Page</h6>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link text-white " href="{{url('user')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">User</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white " href="{{url('member')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Member</span>
          </a>
      </li> --}}
    </ul>
  </div>