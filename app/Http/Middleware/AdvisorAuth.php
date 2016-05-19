<?php

namespace App\Http\Middleware;

use Closure;

class AdvisorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    	$user = $request->user();
    	if($user && $user->role == \Config::get('constants.roles.advisor')){
    		return $next($request);
    	}
    	return redirect("/");
    }
}
