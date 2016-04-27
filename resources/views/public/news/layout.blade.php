@extends('public_layout')
@section('body')
	@yield('content')
	<div class="col-md-2">
		<ul>			
			@foreach($articles as $article)
				<li><a href="{{ route('news.show', ['id' => $article->id]) }}">{{ $article->title }}</a></li>
			@endforeach			
		</ul>
	</div>
@stop