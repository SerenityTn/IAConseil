<!-- Menu -->
<div class="side-menu">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<div class="brand-wrapper">
				<!-- Hamburger -->
				<button type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

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
								<input type="text" class="form-control" placeholder="Entrer des mots clés">
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
				<li {{{ (Request::is('client') ? 'class=active' : '') }}}>
					<a href="{{ route('client.index') }}">
					<span class="glyphicon glyphicon-home"></span> 
					Accueil
					</a>
				</li>					
				<li {{{ (Request::is('client.questions') ? 'class=active' : '') }}}>
					<a href="{{ route('client.questions.create') }}">
					<span class="glyphicon glyphicon-question-sign"></span> 
					Poser une question
					</a>
				</li>
				<li {{{ (Request::is('question.create') ? 'class=active' : '') }}}>
					<a href="{{ route('client.questions.index') }}">
					<span class="glyphicon glyphicon-th-list"></span> 
					Mes questions
					</a>
				</li>								
				<li>
					<a href="{{ route('client.stats') }}">
					<span class="glyphicon glyphicon-stats"></span> 
					Statistiques</a></li>
				
				<li {{{ (Request::is('question.create') ? 'class = active' : '') }}}>
					<a href="#">
						<span class="glyphicon glyphicon-user"></span>
						 Mon compte
					</a>								
				</li>
				<li><a href="#"><span class="glyphicon glyphicon-cog"></span>Paramètres</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>
</div>