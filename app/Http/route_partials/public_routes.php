<?php

Route::get('/',[		
	'as' => 'index',
	'uses' => 'PublicController@index'
]);

Route::get('news',[
		'as' => 'news',
		'uses' => 'PublicController@news'
]);

Route::get('contact',[
		'as' => 'contact',
		'uses' => 'PublicController@contact'
]);

Route::get('about',[
		'as' => 'about',
		'uses' => 'PublicController@about'
]);