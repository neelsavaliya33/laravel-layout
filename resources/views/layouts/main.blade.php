</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : env('APP_NAME', '') }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('main/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('main/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('main/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('main/assets/images/favicon.svg') }}" type="image/x-icon">
    @livewireStyles
    @powerGridStyles
</head>

<body>
    @if (!isset($noSidebar) || !$noSidebar)
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('main/assets/images/logo/logo.png') }}"
                                        alt="Logo" srcset=""></a>
                            </div>
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>

                            <li class="sidebar-item active ">
                                <a href="index.html" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <h3>{{ isset($title) ? $title : ''}}</h3>
                </div>
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
        </div>
    @else
        @yield('content')
    @endif
    <!-- Main content -->
    <!-- Argon Scripts -->
    <!-- Core -->

    <script src="{{ asset('main/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('main/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('main/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('main/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('main/assets/js/mazer.js') }}"></script>
    @livewireScripts
    @powerGridScripts
</body>

</html>
