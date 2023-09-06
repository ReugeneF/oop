<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;

    $client = new Client([
        'base_url' => 'http://dataservice.accuweather.com/currentconditions/v1/251688?apikey=ZzKagcNQ7TesvAr1UjsIWkquObAsirUV' ]);

    $response = $client->getAsync('/251688?apikey=ZzKagcNQ7TesvAr1UjsIWkquObAsirUV HTTP/1.1');

    
