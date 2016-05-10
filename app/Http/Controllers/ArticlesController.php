<?php

namespace App\Http\Controllers;

use App\Article;
use App\Theme;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller{
	
	public function index(){
		$articles = Article::all();
		return view('advisor.articles.index', compact('articles'));
	}
	
	public function show($id){
		return view('advisor.articles.index');
	}
	
	public function show_public($article){		
		$articles = Article::all();
		return view('public.news.show_article', compact('article'), compact('articles'));
	}
	
	public function create(){
		$themes = Theme::all();
		return view('advisor.articles.create', compact('themes'));
	}
	
	public function store(){
		$article = new Article([
			'title' => Input::get('title'),
			'content' => Input::get('content')
		]);					
		$theme = Theme::find(Input::get('theme_id'));
		$theme->articles()->save($article);
		return back()->with('status', 'Article créé avec succès');		
	}
	
	public function edit($article){		
		$themes = Theme::all();
		return view('advisor.articles.edit', compact('article'), compact('themes'));
	}
	
	public function update($article){		
		$article->theme_id = Input::get('theme_id');
		$article->title = Input::get('title');
		$article->content = Input::get('content');
		$article->save();
		return redirect()->route('advisor.articles.index');
	}
	
	public function destroy($article){		
		$article->delete();
		return redirect()->route('advisor.articles.index');
	}
}
