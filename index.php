<?php 
	require __DIR__.'/vendor/autoload.php';

	use Kreait\Firebase;

	$firebase = (new Firebase\Factory())
	    ->withCredentials(__DIR__.'/firebase.json')
	    ->withDatabaseUri('https://vehiclesys-fe347.firebaseio.com')
	    ->create();

	// Sensor gps: latitude, longitude
	// Sensor accelerometer: x, y, z
	// Sensor arus: arus (ampere)
	// Sensor obd: kecepatan, rpm dll

	 $lat = $_GET['lat'];
	 $long = $_GET['long'];
	 $x = $_GET['x'];
	 $y = $_GET['y'];
	 $z = $_GET['z'];
	 $arus = $_GET['arus'];
	 $kecepatan = $_GET['kecepatan'];
	 $rpm = $_GET['rpm'];
	 $waktu = $_GET['waktu'];
	
	$data = array(
		'lat' => $lat, 
		'long' => $long, 
		'x' => $x, 
		'y' => $y, 
		'z' => $z, 
		'arus' => $arus, 
		'kecepatan' => $kecepatan, 
		'rpm' => $rpm, 
		'waktu' => $waktu, 
	);    
    
   	var_dump($data);

	$database = $firebase->getDatabase();

	$post = $database->getReference('cars')->push($data);

 ?>