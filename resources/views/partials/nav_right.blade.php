@if(Auth::check())
	<?php
		$role = 'client.index';	 
		if($role == 1)
			$role = 'admin.index';
		else if($role == 2)
			$role = 'advisor.index';		
	?>	
	
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="{{ route($role) }}">
				<span class="glyphicon glyphicon-user"></span> {{ Auth::user()->nom }}
			</a>
		</li>
		<li>
			<a href="{{ route('logout') }}">
				<span class="glyphicon glyphicon-log-out"></span> Se déconnecter
			</a>
		</li>
	</ul>
@else
	<ul class="nav navbar-nav navbar-right">
		<li><a href="/register"> <span class="glyphicon glyphicon-user"></span> S'inscrire
		</a></li>
		<li><a href="/login"> <span class="glyphicon glyphicon-log-in"></span> Se connecter
		</a></li>
	</ul>
@endif
