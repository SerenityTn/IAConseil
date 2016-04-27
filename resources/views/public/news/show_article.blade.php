@extends('public.news.layout')
@section('content')
	<div class="col-md-10">		
		<h2 class="page-header">		
			{{ $article->title }}
		</h2><?php setlocale(LC_TIME, 'fr_FR.utf8') ?>
		<p>
			<span class="glyphicon glyphicon-time"></span>
			{{ $article->created_at->formatLocalized('Publié le  %A %d %B %Y à %H:%m') }}</p>
		<p>
			{{ $article->content }}
		</p>		
	</div>
@stop