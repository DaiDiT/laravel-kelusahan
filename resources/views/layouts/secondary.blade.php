<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="google-site-verification" content="U5z_WCYWMzTLk9OPe6KF5bcWaC87_30_qI7vNQl0HSM">
	<meta name="description" content="A platform to air your life's grievances">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}">
	<title>kelusahan | {{ $title }}</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/Raleway.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	@include('partials.nav')
	@yield('container')
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>