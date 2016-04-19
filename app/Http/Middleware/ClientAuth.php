<?php

namespace App\Http\Middleware;

use Closure;

class ClientAuth{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    	$user = $request->user();
    	if($user && $user->role == \Config::get('constants.roles.client')){
    		return $next($request);
    	}        
    	abort(404, 'Only clients accepted');
    }
}
