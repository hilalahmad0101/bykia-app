<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ready to use PHP Admin Panel for projects">
    <meta name="author" content="amiriqbalmcs">
    <meta name="keywords" content="bootstrap, bootstrap 5, admin, dashboard, php">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>Log In | Admin </title>

    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/css/toastr.min.css') }}" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
               @yield('content')
            </div>
        </div>
    </main>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/toastr.min.js') }}"></script>

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
