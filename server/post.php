<?php
//this file sends the data to the API



$url = 'https://3gl-hr-api.azurewebsites.net/v1/messenger';

$input = file_get_contents('php://input');

$data = json_decode($input, true);



$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => json_encode($data),
    ],
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);


echo $response;


