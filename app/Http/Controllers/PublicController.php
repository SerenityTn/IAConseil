<?php

namespace App\Http\Controllers;


class PublicController extends Controller{
	public function index(){
		return view ( 'public.index' );
	}
	
	public function news(){
		return view ( 'public.news' );
	}
	
	public function contact(){
		return view ( 'public.contact' );
	}
	
	public function about(){
		return view ( 'public.about' );		
	}
}
