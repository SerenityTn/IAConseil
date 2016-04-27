<?php

namespace App\Http\Controllers;


use App\Article;

class PublicController extends Controller{
	public function index(){
		return view ( 'public.index' );
	}
	
	public function news(){
		$articles = Article::all();
		return view ( 'public.news.index', compact('articles'));
	}
	
	public function about(){
		return view ( 'public.about' );		
	}
}
