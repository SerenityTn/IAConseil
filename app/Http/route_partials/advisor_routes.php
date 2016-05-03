<?php

Route::group ( ['middleware'=> 'advisorAuth', 'prefix' => "advisor"], function () {
	Route::get ( '/', ['as' => 'advisor.index', function(){
				return view('advisor.index');
			}
	] );
	
	Route::group(['prefix' => 'questions'], function(){
		Route::resource('client', 'CQuestionsController');
		Route::resource('ia', 'IAQuestionsController');		
	});
	
	
		
	Route::resource('article', 'ArticlesController');
} );