<?php

namespace App\Http\Controllers;

use App\Article;
use App\Theme;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller{
	
	public function index(){
		$articles = Article::all();
		return view('advisor.article.index', compact('articles'));
	}
	
	public function show($id){
		return view('advisor.article.index');
	}
	
	public function show_public($id){
		$article = Article::find($id);
		$articles = Article::all();
		return view('public.news.show_article', compact('article'), compact('articles'));
	}
	
	public function create(){
		$themes = Theme::all();
		return view('advisor.article.create', compact('themes'));
	}
	
	public function store(){
		$article = new Article();
		$article->title = Input::get('title');
		$article->content = Input::get('content');
		
		$theme = Theme::find(Input::get('theme_id'));
		$theme->articles()->save($article);
		return redirect()->route('advisor.article.index');		
	}
	
	public function edit($id){
		$article = Article::find($id);
		$themes = Theme::all();
		return view('advisor.article.edit', compact('article'), compact('themes'));
	}
	
	public function update($id){
		$article = Article::find($id);
		$article->theme_id = Input::get('theme_id');
		$article->title = Input::get('title');
		$article->content = Input::get('content');
		$article->save();
		return redirect()->route('advisor.article.index');
	}
	
	public function destroy($id){
		$article = Article::find($id);
		$article->delete();
		return redirect()->route('advisor.article.index');
	}
}
