<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ready to use PHP Admin Panel for projects">
    <meta name="author" content="amiriqbalmcs">
    <meta name="keywords" content="bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, php">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/img/icons/icon-48x48.png" />

    <title> Admin | @yield('title')</title>

    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Toastr Notifications CSS-->
    <link href="{{ asset('admin/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="dashboard.php">
                    <span class="align-middle">KP Admin</span>
                </a>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Components
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="{{ route('admin.user.list') }}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Job Post
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="{{ route('admin.location.list') }}">
                            <i class="align-middle" data-feather="tag"></i> <span class="align-middle">
                                Location</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="{{ route('admin.job.list') }}">
                            <i class="align-middle" data-feather="edit-3"></i> <span class="align-middle"> Jobs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                {{-- <img src="uploads/profile/admin-photo-1632074148.jpg"
                                    class="avatar img-fluid rounded me-1" alt="Charles Hall" /> --}}
                                     <span
                                    class="text-dark">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                {{-- <a class="dropdown-item" href="edit-user.php?edit=1"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="settings.php"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="align-middle me-1"
                                        data-feather="log-out"></i>Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('content')
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="" target="_blank"><strong>BK Admin</strong></a>
                                &copy; {{ date('Y') }}
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="" target="_blank"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <!-- Toastr Notifications JS-->
    <script src="{{ asset('admin/js/toastr.min.js') }}"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="{{ asset('admin/js/dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/custom.js') }}"></script>

    @session('success')
        <script>
            toastr.success("{{ session('success') }}")
        </script>
    @endsession

    @session('error')
        <script>
            toastr.error("{{ session('error') }}")
        </script>
    @endsession
</body>

</html>
