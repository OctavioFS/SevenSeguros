<?php 

require 'libraries/flight/Flight.php';

Flight::set('flight.views.path', 'views');
Flight::set('path.assets', 'assets');

Flight::route('/', function(){

	$data['titulo'] = 'seven';

	$user = Flight::user();
	$data['titulo'] = 'llamas';
	
    Flight::render('home', $data, 'body_content');
    Flight::render('common/base');
    
});

Flight::route('/contacto', function(){

	$data['titulo'] = 'contacto';

	$user = Flight::user();
	$data['titulo'] = 'Contacto';
	
    Flight::render('contacto', $data, 'body_content');
    Flight::render('common/base');
    
});

Flight::route('POST /enviar', function(){

	$data['asunto'] = $_POST["envio"];
	$data['mensaje'] = $_POST["envio2"];

	$data['titulo'] = 'Contacto';
	
    Flight::render('enviar', $data, 'body_content');
    Flight::render('common/base');
	     
});

Flight::route('/body', function(){
    
});

Flight::route('/prueba', function(){
    echo 'hello prueba';
});


Flight::route('POST /envio', function(){
    var_dump($_POST);
});


Flight::start();
