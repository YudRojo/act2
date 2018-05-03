<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use \Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/clima', function() use ($app) {
    
	$client = new Client();
	$url ="http://api.openweathermap.org/data/2.5/weather?id=3530597&appid=240b05e0a7ecb659d0ea84c61221d19f&units=metric";
    $response = $client->get($url);
	$body = $response->getBody();
	

    return new Response($body,200,array('Content=Type' -> 'application/json'));
	
});
$app->run();