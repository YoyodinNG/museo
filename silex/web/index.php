<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//pequeño cambio, probando Git...#2
$app->get('/hello', function() {
    return 'Hello World!';
});

$app->run();
