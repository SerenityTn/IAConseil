<?php

Route::auth();
$route_partials = ['public', 'users', 'client', 'advisor', 'admin', 'question']; 

foreach($route_partials as $partial){
	$file = __DIR__.'/route_partials/'.$partial.'_routes.php';
	if(!file_exists($file)){
		$msg = "Route partial [{$partial}] not found.";		
		dd("Not found : " . $file);
	}
	
	require_once $file;
}


	