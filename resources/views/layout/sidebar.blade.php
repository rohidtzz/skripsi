@section('sidebar')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="
          @if (auth()->user()->jabatan == 'karyawan')
                {{ asset('foto/'.auth()->user()->foto) }}

                @elseif (auth()->user()->jabatan == 'direktur')
                {{ asset('foto/'.auth()->user()->foto) }}

                @elseif (auth()->user()->jabatan == 'hrd')
                {{ asset('foto/'.auth()->user()->foto) }}

                @else
                @endif

          " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li> --}}

          <a href=" @if (auth()->user()->jabatan == 'karyawan')
                {{url('karyawan/dashboard')}}

                @elseif (auth()->user()->jabatan == 'direktur')
                {{url('direktur/dashboard')}}

                @elseif (auth()->user()->jabatan == 'hrd')
                {{url('hrd/dashboard')}}

                @else

                {{-- {{url('hrd/dashborad')}} --}}


          @endif" class="nav-link {{ Request::is('karyawan/dashboard') ? 'active' : '' }} {{ Request::is('direktur/dashboard') ? 'active' : '' }} {{ Request::is('hrd/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Gaji
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="@if (auth()->user()->jabatan == 'karyawan')
                {{url('karyawan/LihatAbsen')}}

                @elseif (auth()->user()->jabatan == 'direktur')
                {{url('direktur/lihatabsen')}}

                @elseif (auth()->user()->jabatan == 'hrd')
                {{url('hrd/lihatabsen')}}

                @else @endif  " class="nav-link {{ Request::is('karyawan/LihatAbsen') ? 'active' : '' }}{{ Request::is('karyawan/lihatabsen/masuk') ? 'active' : '' }}{{ Request::is('karyawan/lihatabsen/telat') ? 'active' : '' }}{{ Request::is('karyawan/lihatabsen/sakit') ? 'active' : '' }}{{ Request::is('karyawan/lihatabsen/alpha') ? 'active' : '' }}{{ Request::is('karyawan/lihatabsen/izin') ? 'active' : '' }}
                {{ Request::is('hrd/lihatabsen') ? 'active' : '' }}{{ Request::is('hrd/lihatabsen/masuk') ? 'active' : '' }}{{ Request::is('hrd/lihatabsen/telat') ? 'active' : '' }}{{ Request::is('hrd/lihatabsen/sakit') ? 'active' : '' }}{{ Request::is('hrd/lihatabsen/alpha') ? 'active' : '' }}{{ Request::is('hrd/lihatabsen/izin') ? 'active' : '' }}
                {{ Request::is('direktur/lihatabsen') ? 'active' : '' }}{{ Request::is('direktur/lihatabsen/masuk') ? 'active' : '' }}{{ Request::is('direktur/lihatabsen/telat') ? 'active' : '' }}{{ Request::is('direktur/lihatabsen/sakit') ? 'active' : '' }}{{ Request::is('direktur/lihatabsen/alpha') ? 'active' : '' }}{{ Request::is('direktur/lihatabsen/izin') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-clock"></i>
              <p>
                Absensi
              </p>
            </a>
          </li>

          <li class="nav-item {{Request::is('karyawan/pengajuan') ? 'menu-open' : ''}}{{Request::is('hrd/pengajuan') ? 'menu-open' : ''}}{{Request::is('direktur/pengajuan') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('karyawan/pengajuan') ? 'active' : ''}}{{Request::is('hrd/pengajuan') ? 'active' : ''}}{{Request::is('direktur/pengajuan') ? 'active' : ''}}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengajuan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Lembur</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="
                @if (Auth()->user()->jabatan == 'hrd')
                {{ url('/hrd/pengajuan') }}
                @elseif (Auth()->user()->jabatan == 'karyawan')
                {{ url('karyawan/pengajuan') }}
                @else
                {{ url('direktur/pengajuan') }}
                @endif
                " class="nav-link {{Request::is('karyawan/pengajuan') ? 'active' : ''}} {{Request::is('hrd/pengajuan') ? 'active' : ''}} {{Request::is('direktur/pengajuan') ? 'active' : ''}}">
                  <i class="fas {{Request::is('karyawan/pengajuan') ? 'fa-dot-circle' : 'fa-dot-circle'}} {{Request::is('hrd/pengajuan') ? 'fa-dot-circle' : 'fa-dot-circle'}} {{Request::is('direktur/pengajuan') ? 'fa-dot-circle' : 'fa-dot-circle'}} nav-icon"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>pengajuan</p>
                </a>
              </li> --}}

            </ul>
          </li>

          <li class="nav-item {{Request::is('hrd/settings/jamkerja') ? 'menu-open' : ''}}{{Request::is('direktur/settings/jamkerja') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('hrd/settings/jamkerja') ? 'active' : ''}}{{Request::is('direktur/settings/jamkerja') ? 'active' : ''}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              {{-- <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link ">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Akun</p>
                </a>
              </li> --}}
              @if (Auth()->user()->jabatan == 'hrd' || Auth()->user()->jabatan == 'direktur')
              <li class="nav-item">
                <a href="@if (Auth()->user()->jabatan == 'hrd')
                {{ url('/hrd/settings/jamkerja') }}
                @else
                {{ url('direktur/settings/jamkerja') }}
                @endif

                " class="nav-link {{Request::is('hrd/settings/jamkerja') ? 'active' : ''}} {{Request::is('direktur/settings/jamkerja') ? 'active' : ''}}">
                  <i class="fas {{Request::is('hrd/settings/jamkerja') ? 'fa-dot-circle' : 'fa-dot-circle'}} {{Request::is('direktur/settings/jamkerja') ? 'fa-dot-circle' : 'fa-dot-circle'}}  nav-icon"></i>
                  <p>Jam Kerja</p>
                </a>
              </li>
              @endif


            </ul>
          </li>


          <li class="nav-item {{Request::is('hrd/datauser') ? 'menu-open' : ''}}{{Request::is('hrd/user') ? 'menu-open' : ''}}{{ Request::is('hrd/tambahuser') ? 'menu-open' : '' }}{{Request::is('direktur/user') ? 'menu-open' : ''}}{{Request::is('direktur/datauser') ? 'menu-open' : ''}}{{Request::is('karyawan/user') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('hrd/user') ? 'active' : ''}}{{Request::is('hrd/tambahuser') ? 'active' : ''}}{{Request::is('hrd/datauser') ? 'active' : ''}}{{Request::is('direktur/user') ? 'active' : ''}}{{Request::is('karyawan/user') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">


                <li class="nav-item ">
                    <a href="@if (Auth()->user()->jabatan == 'hrd')
                        {{ url('hrd/user') }}
                        @elseif (Auth()->user()->jabatan == 'karyawan')
                        {{ url('karyawan/user') }}
                        @else
                        {{ url('direktur/user') }}
                        @endif" class="nav-link {{ Request::is('hrd/user') ? 'active' : '' }}{{ Request::is('direktur/user') ? 'active' : '' }}{{ Request::is('karyawan/user') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        User
                      </p>
                    </a>
                  </li>



                @if (Auth()->user()->jabatan == 'hrd')
              <li class="nav-item ">
                <a href="/hrd/tambahuser" class="nav-link {{ Request::is('hrd/tambahuser') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>
                    Tambah User
                  </p>
                </a>
              </li>
              @endif
              @if (Auth()->user()->jabatan == 'hrd' || Auth()->user()->jabatan == 'direktur')
              <li class="nav-item ">
                <a href="
                @if (Auth()->user()->jabatan == 'hrd')
                {{ url('/hrd/datauser') }}
                @elseif (Auth()->user()->jabatan == 'direktur')
                {{ url('direktur/datauser') }}
                @else
                @endif
                " class="nav-link {{ Request::is('hrd/datauser') ? 'active' : '' }}{{ Request::is('direktur/datauser') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Data User
                  </p>
                </a>
              </li>
              @endif





            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link ">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @endsection
