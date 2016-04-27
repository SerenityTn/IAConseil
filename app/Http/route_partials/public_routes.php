<?php

Route::get('/',[		
	'as' => 'index',
	'uses' => 'PublicController@index'
]);

Route::get('news',[
		'as' => 'news.index',
		'uses' => 'PublicController@news'
]);

Route::get('news/{id}',[
		'as' => 'news.show',
		'uses' => 'ArticlesController@show_public'
]);

Route::get('contact',[
		'as' => 'contact',
		'uses' => 'MessagesController@create'
]);

Route::post('contact',[
		'as' => 'message.store',
		'uses' => 'MessagesController@store'
]);

Route::get('about',[
		'as' => 'about',
		'uses' => 'PublicController@about'
]);