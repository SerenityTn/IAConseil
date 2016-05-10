<?php

Route::group ( ['middleware'=> 'advisorAuth', 'prefix' => "advisor"], function () {
	Route::get ( '/', ['as' => 'advisor.index', function(){
				return view('advisor.index');
			}
	] );
	
	Route::group(['prefix' => 'clients'], function(){		
		Route::resource('questions', 'CQuestionsController');
		
		Route::post('questions/filter', [
				'as' => 'advisor.clients.questions.filter',
				'uses' => 'CQuestionsController@filter'
		]);
		
		Route::post('questions/{questions}/update_index', [
			'as' => 'advisor.clients.questions.update_index',
			'uses' => 'CQuestionsController@update_index' 
		]);		
		
		Route::resource('questions.responses', 'ResponsesController');
	});
		
	Route::group(['prefix' => 'ia'], function(){
		Route::resource('questions', 'IAQuestionsController');
	});

	Route::group(['prefix' => 'stats'], function(){
		Route::get ( '/', ['as' => 'advisor.stats', function(){
			return view('advisor.stats.index');
		}
		]);
		
		Route::get ( '/data', ['as' => 'advisor.stats.data', function(){
			$stats = new App\Stats();
			return $stats->getStats();
		}
		]);
		
		Route::get ( '/clients', ['as' => 'advisor.stats.clients', function(){
			return view('advisor.stats.clients');
		}
		]);
		
		Route::get ( '/clients/data', ['as' => 'advisor.stats.clients', function(){
			$stats = new App\Stats();
			return $stats->getClientsStats();
		}
		]);
		
		Route::get ( '/ia', ['as' => 'advisor.stats.ia', function(){
			return view('advisor.stats.ia');
		}
		]);
		
		Route::get ( '/ia/data', ['as' => 'advisor.stats.ia', function(){
			$stats = new App\Stats();
			return $stats->getIAStats();
		}
		]);
	});
	
	
	
	Route::resource('articles', 'ArticlesController');
} );