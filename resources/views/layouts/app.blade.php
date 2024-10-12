
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

	<link href="{{ asset('admin/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<!-- Toastr Notifications CSS-->
	<link href="{{ asset('admin/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
	<!-- Custom CSS-->
	<link href="{{ asset('admin/css/custom.css')}}" rel="stylesheet">
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
				<a class="sidebar-link" href="dashboard.php">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item ">
				<a class="sidebar-link" href="users.php">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
				</a>
			</li>

			<li class="sidebar-header">
				Blog Posts
			</li>

			<li class="sidebar-item ">
				<a class="sidebar-link" href="categories.php">
					<i class="align-middle" data-feather="tag"></i> <span class="align-middle"> Categories</span>
				</a>
			</li>
			<li class="sidebar-item ">
				<a class="sidebar-link" href="posts.php">
					<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle"> Posts</span>
				</a>
			</li>

			<li class="sidebar-header">
				Extra
			</li>

			<li class="sidebar-item ">
				<a class="sidebar-link" href="settings.php">
					<i class="align-middle" data-feather="settings"></i> <span class="align-middle"> Settings</span>
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
					<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
						<i class="align-middle" data-feather="settings"></i>
					</a>
					<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						<img src="uploads/profile/admin-photo-1632074148.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Amir Iqbal</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="edit-user.php?edit=1"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="settings.php"><i class="align-middle me-1" data-feather="settings"></i> Settings</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout.php"><i class="align-middle me-1" data-feather="log-out"></i>Log out</a>
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
					<a class="text-muted" href="" target="_blank"><strong>KP Admin</strong></a> &copy; 2024				</p>
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
<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
<script src="{{ asset('admin/js/app.js')}}"></script>
<!-- Toastr Notifications JS-->
<script src="{{ asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<!-- DataTables JS -->
<script type="text/javascript" src="{{ asset('admin/js/dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/custom.js')}}"></script>
</body>
</html><script>
	document.addEventListener("DOMContentLoaded", function() {
		"use strict";
			// Pie chart
		new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Active", "Disabled"],
					datasets: [{
						data: [60, 220],
						backgroundColor: [
						window.theme.primary,
						window.theme.warning,
						window.theme.danger
						],
						borderWidth: 5
					}]
				},
			options: {
				responsive: !window.MSInputMethodContext,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				cutoutPercentage: 75
			}
		});
	});
</script>
<script>

	document.addEventListener("DOMContentLoaded", function() {
		"use strict";
		var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
		var gradient = ctx.createLinearGradient(0, 0, 0, 225);
		gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
		gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
		// Line chart
		new Chart(document.getElementById("chartjs-dashboard-line"), {
			type: "line",
			data: {
				labels: ['January','February','March','April','May','June','July','August','September','October','November','December'],
				datasets: [{
					label: "Users",
					fill: true,
					backgroundColor: gradient,
					borderColor: window.theme.primary,
					data: [29, 21, 38, 37, 10, 14, 16, 13, 34, 21, 24, 23]
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				tooltips: {
					intersect: false
				},
				hover: {
					intersect: true
				},
				plugins: {
					filler: {
						propagate: false
					}
				},
				scales: {
					xAxes: [{
						reverse: true,
						gridLines: {
							color: "rgba(0,0,0,0.0)"
						}
					}],
					yAxes: [{
						ticks: {
							stepSize: 1000
						},
						display: true,
						borderDash: [3, 3],
						gridLines: {
							color: "rgba(0,0,0,0.0)"
						}
					}]
				}
			}
		});
	});
</script>