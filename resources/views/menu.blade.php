<div class="side-menu">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Main Menu -->
		<div class="side-menu-container">
			<ul class="nav navbar-nav">
				<li>					
					<a href="/{{ session()->get('role') }}">
						<span class="glyphicon glyphicon-home"></span>
						Accueil
					</a>
				</li>
				@yield('menus')
				<li>
					<a href="{{ route('user.profile.show', ['id' => auth()->user()->id]) }}">
						<span class="glyphicon glyphicon-user"></span>
						Mon compte
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
