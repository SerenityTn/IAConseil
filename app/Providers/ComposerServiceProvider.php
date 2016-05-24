<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
    	view()->composer('admin.users.list', function ($view) {
    		$role_map= [
    				"1" => "<strong>Administrateur</strong>",
    				"2" => "<i>Expert</i>",
    				"3" => "Client",
    				"4" => "<b><u>Client Prime</u></b>"
    		];
    		$view->with('role_map', $role_map);
    	});

    	view()->composer('advisor.clients.questions.filters', function($view){
    		$clients = [0 => 'Tous les clients'] + \App\User::where('role','>=', '3')->lists('nom','id')->toArray();
    		$view->with('clients', $clients);
    	});

    	view()->composer('public_layout', function($view){
    		if(auth()->check()){
    			$menu_size = 3;
    			$body_size = 9;
    		}else{
    			$menu_size = 0;
    			$body_size = 12;
    		}
    		$view->with(compact('menu_size'))->with(compact('body_size'));
    	});

      view()->composer('client.dialog.history', function($view){
          $cmessages = auth()->user()->cmessages()->get();
          $view->with('cmessages', $cmessages);
      });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
