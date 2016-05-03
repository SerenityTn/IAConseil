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
    	view()->composer('admin.users.index', function ($view) {
    		$role_map= [
    				"1" => "<strong>Administrateur</strong>",
    				"2" => "<i>Expert</i>",
    				"3" => "Client"
    		];    		
    		$view->with('role_map', $role_map);    		
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
