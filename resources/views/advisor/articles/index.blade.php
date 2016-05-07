@extends('advisor.layout')
@section('title')
	Gérer les actualités
@stop
@section('buttons')
<buton onclick="create_article()" data-toggle="modal" data-target="#modal" class="btn btn-primary">
	Nouveau Article
</a>
@stop
@section('body')
	@foreach($articles as $article)
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="pull-left">{{ $article->title }}</h4>					
						<div class="pull-right">					
							<button onclick="update_article({{ $article->id }})"  data-toggle="modal" data-target="#modal" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button>
								{{ Form::open(array('method'  => 'delete', 'route' => ['advisor.articles.destroy', $article->id], "style"=>"display:inline")) }}		                    
				                    <button type="submit" class = "btn btn-danger">
				                    	<span class="glyphicon glyphicon-trash"></span>
				                    </button>                    
			                	{{ Form::close() }}	
						</div>
					</div>
					<div class="panel-body">{{ $article->content }}</div>
				</div>
			</div>
		</div>
	@endforeach
@stop

<script type="text/javascript">
	function create_article(){
		$(".modal-title").text('Créer un article')
		$(".modal-body").load('articles/create');	
	}

	function update_article(id){
		$(".modal-title").text('Modifier un article')
		$(".modal-body").load('articles/' + id + '/edit');	
	}
</script>