@extends('advisor.layout')
@section('body')
<div class="row">	
	<div class="col-xs-6">	
		<div class="button-group">	
			<a href="{{ route('advisor.article.create') }}" class="btn btn-primary">
				Nouveau Article
			</a>
		</div>
	</div>		
</div>
<hr/>
@foreach($articles as $article)
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h4 class="pull-left">{{ $article->title }}</h4>					
					<div class="pull-right">					
						<a href="{{ route('advisor.article.edit', ['id'=>$article->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
							{{ Form::open(array('method'  => 'delete', 'route' => ['advisor.article.destroy', $article->id], "style"=>"display:inline")) }}		                    
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