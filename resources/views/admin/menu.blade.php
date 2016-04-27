<!-- Menu -->
<div class="side-menu">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<div class="brand-wrapper">
				<!-- Brand -->
				<div class="brand-name-wrapper">
					<a class="navbar-brand" href="#"> Chercher une question </a>
				</div>

				<!-- Search -->
				<a data-toggle="collapse" href="#search" class="btn btn-default"
					id="search-trigger"> <span class="glyphicon glyphicon-search"></span>
				</a>

				<!-- Search body -->
				<div id="search" class="panel-collapse collapse">
					<div class="panel-body">
						<form class="navbar-form" role="search">
							<div class="form-group">
								<input type="text" class="form-control"
									placeholder="Entrer des mots clés">
							</div>
							<button type="submit" class="btn btn-default ">
								<span class="glyphicon glyphicon-ok"></span>
							</button>
						</form>
					</div>
				</div>
			</div>

		</div>

		<!-- Main Menu -->
		<div class="side-menu-container">
			<ul class="nav navbar-nav">					
				<li>
					<a href="/admin">
						<span class="glyphicon glyphicon-home"></span>
						Accueil
					</a>
				</li>			
				<li class="panel panel-default" id="dropdown">
					<a data-toggle="collapse" href="#manage-lvl1">
						<span class="glyphicon glyphicon-pencil"></span>
						Gérer
						<span class="caret"></span>
					</a>										
					<div id="manage-lvl1" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="nav navbar-nav">
								<li><a href="{{ route('admin.manage.users.index') }}">Utilisateurs</a></li>
								<li><a href="{{ route('admin.manage.messages.index') }}">Messages</a></li>
							</ul>
						</div>
					</div>
				</li>
				
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-stats"></span>
						Statistiques
					</a>
				</li>

				<!-- Dropdown-->
				<li class="panel panel-default" id="dropdown">
					<a data-toggle="collapse" href="#dropdown-lvl1">
						<span class="glyphicon glyphicon-user"></span> 
						Mon compte 
						<span class="caret"></span>
					</a> 
					<!-- Dropdown level 1 -->
					<div id="dropdown-lvl1" class="panel-collapse collapse">
						<div class="panel-body">
							<ul class="nav navbar-nav">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>							
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-cog"></span>
						Paramètres
					</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
</div>