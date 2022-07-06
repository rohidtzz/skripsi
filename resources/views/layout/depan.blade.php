<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Favicon -->
    <link href="{{ url('argon') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('argon') }}/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{ url('argon') }}/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ url('argon') }}/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="bg-default">
    <!-- Navbar -->
    @auth
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">
            <a class="navbar-brand" href="">
                <h1 class="text-white">{{ config('app.name') }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="">
                                <h1>{{ config('app.name') }}</h1>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class="navbar-nav ml-auto">
                    {{-- @if (auth()->user()->role->role == "Admin")
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link nav-link-icon">
                                <i class="ni ni-circle-08"></i>
                                <span class="nav-link-inner--text">Users</span>
                            </a>
                        </li>
                    @endif --}}
                    {{-- <li class="nav-item">
                        @if (auth()->user()->jabatan == "karyawan")
                            <a class="nav-link nav-link-icon" href="">
                        @else
                            <a class="nav-link nav-link-icon" href="{{ route('dashboard') }}">
                        @endif
                            <i class="ni ni-check-bold"></i>
                            <span class="nav-link-inner--text">Kehadiran</span>
                        </a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="
                        @if(auth()->user()->jabatan == 'karyawan')
                            {{url('karyawan/dashboard')}}

                            @elseif (auth()->user()->jabatan == 'direktur')
                            {{url('direktur/dashboard')}}

                            @elseif (auth()->user()->jabatan == 'hrd')
                            {{url('hrd/dashboard')}}

                            @else @endif">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-inner--text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span class="nav-link-inner--text">Logout</span>
                        </a>

                        <form id="logout-form" action="{{route('logout')}}" method="get" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endauth

    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Selamat Datang!</h1>
                            <p class="text-lead text-light">Sistem Absensi Terpadu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <footer class="py-5">
            <div class="container">
                <div class="copyright text-center">
                    © {{ date('Y')}} <a href="https://grhayasa.com/" class="font-weight-bold ml-1" target="_blank">PT.
                        Grhayasa Nusacitra Estima</a> Theme By <a href="https://www.creative-tim.com"
                        class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                </div>
            </div>
        </footer> --}}
    </div>
    <!--   Core   -->
    <script src="{{ url('argon') }}/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('argon') }}/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    @stack('scripts')

    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });

    </script>
    <script src="{{ asset('js/myscript.js') }}"></script>

    <script type="text/javascript">
        window.onload = function() { jam(); }

        function jam() {
         var e = document.getElementById('jam'),
         d = new Date(), h, m, s;
         h = d.getHours();
         m = set(d.getMinutes());
         s = set(d.getSeconds());

         e.innerHTML = h +':'+ m +':'+ s;

         setTimeout('jam()', 1000);
        }

        function set(e) {
         e = e < 10 ? '0'+ e : e;
         return e;
        }
       </script>

</body>

</html>
