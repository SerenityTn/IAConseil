<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		
		<title>@yield('title')</title> 
		@yield('style')
		<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">IA Conseil</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					@include('partials.nav_public')
					@include('partials.nav_right')
				</div>
			</div>
		</nav>
		@yield('container')
		<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
		<script type="text/javascript"
			src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		@yield('scripts')
	</body>
</html>
