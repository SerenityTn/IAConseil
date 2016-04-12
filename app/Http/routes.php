<?php

Route::get('/', function () {
    return view('public.index');
});

Route::get('news', function () {
	return view('public.news');
});

Route::get('contact', function () {
	return view('public.contact');
});

Route::get('about', function () {
	return view('public.about');
});

Route::get('login', function () {
	return view('public.login');
});

Route::get('register', function () {
	return view('public.register');
});

Route::get('register/user/', function () {
	return view('public.register');
});


//admin routes
Route::get('admin', function () {
	return view('admin.index');
});

//advisor routes
Route::get('advisor', function () {
	return view('advisor.index');
});

Route::get('advisor/ia_questions', function () {
	return view('advisor.ia_questions');
});

//client routes
Route::get('client', ("ClientController@index"));

Route::get('client/question/ask', ("ClientController@ask"));