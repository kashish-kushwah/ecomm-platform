<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap Gallery - Mars Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="{{ asset('admin-assets/fonts/bootstrap/bootstrap-icons.css')}}" />
		<link rel="stylesheet" href="{{ asset('admin-assets/css/main.min.css')}}" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="{{ asset('admin-assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}" />

		<!-- Toastify CSS -->
		<link rel="stylesheet" href="{{ asset('admin-assets/vendor/toastify/toastify.css')}}" />

	</head>

	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container">

				@include("admin.layouts.left")

				<!-- App container starts -->
				<div class="app-container">

					@include("admin.layouts.top")

					<!-- App body starts -->
					<div class="app-body">

						<!-- Container starts -->
						<div class="container-fluid">
							@include('common.alert')

							@yield("content")

						</div>
						<!-- Container ends -->

					</div>
					<!-- App body ends -->

					@include("admin.layouts.footer")

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('admin-assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{ asset('admin-assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

		<!-- Toastify JS -->
		<script src="{{ asset('admin-assets/vendor/toastify/toastify.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/toastify/custom.js')}}"></script>

		<!-- Apex Charts -->
		<script src="{{ asset('admin-assets/vendor/apex/apexcharts.min.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/overview.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/reachedAudience.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/social.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/sparkline.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/sparkline2.js')}}"></script>
		<script src="{{ asset('admin-assets/vendor/apex/custom/home/visitors.js')}}"></script>

		<!-- Custom JS files -->
		<script src="{{ asset('admin-assets/js/custom.js')}}"></script>
	</body>

</html>