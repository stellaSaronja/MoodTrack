<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MoodTrack - @yield('title')</title>

	<link rel="stylesheet" href="{{ 'css/style.css' }}">
	<!-- <script src="{{ mix('js/app.js') }}"></script> -->

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	{{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    --}}
</head>

<body>

	@include('partials.navbar')

	<div class="container">

		@include('partials.alerts')

		@yield('container')

	</div>

	@include('partials.footer')

</body>

</html>