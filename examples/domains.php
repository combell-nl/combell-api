<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$client = new \Combell\Client(
    [
        'debug' => true,
        'base_uri' => 'https://api.combell.nl',
        'combell_api_key' => 'XXXX',
        'combell_api_secret' => 'YYYY'
    ]
);

// Get all domains you manage
$response = $client->get('/v2/domains', [
    'query' => [
        'skip' => 0,
        'take' => 10
    ]
]);

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);