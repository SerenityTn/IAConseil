<?php
Route::group(['middleware'=> 'adminAuth', 'prefix' => 'admin'], function(){
	Route::get('/',[
			'as' => 'admin',
			'uses' => 'AdminsController@index'
	]);
	
	Route::group(['prefix' => 'manage'], function(){
		
		Route::group(['prefix' => 'users'], function(){
			Route::get('/',[
				'as' => 'admin.manage.users',
				'uses' => 'AdminsController@manage_users'
			]);
			Route::get('/{id}/edit',[
				'as' => 'admin.manage.edit_user',
				'uses' => 'AdminsController@edit_user'
			]);		
		});
			
		Route::group(['prefix' => 'messages'], function(){
			Route::get('/manage/messages',[
				'as' => 'admin.manage.messages',
				'uses' => 'AdminsController@manage_messages'
			]);
		});		
	});
});