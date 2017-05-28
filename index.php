<?php 
	require __DIR__.'/vendor/autoload.php';

	use Kreait\Firebase;

	$firebase = (new Firebase\Factory())
	    ->withCredentials(__DIR__.'/firebase.json')
	    ->withDatabaseUri('https://vehiclesys-fe347.firebaseio.com')
	    ->create();

    
	$database = $firebase->getDatabase();

	$cars = $database->getReference('cars')->getValue();

	var_dump($cars);
 ?>