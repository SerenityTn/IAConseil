<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title> @yield('style')
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">IA Conseil</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/">Accueil</a></li>
					<li><a href="/news/">Actualités</a></li>
					<li><a href="/contact/">Contactez nous</a></li>
					<li><a href="/about/">A propos</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/register"><span class="glyphicon glyphicon-user"></span>
							S'inscrire</a></li>
					<li><a href="/client"><span class="glyphicon glyphicon-log-in"></span>
							Se connecter</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	@yield('container')
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript"
		src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	@yield('scripts')
</body>
</html>
