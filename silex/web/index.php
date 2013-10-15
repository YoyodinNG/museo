<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//pequeño cambio, probando Git...
$app->get('/hello', function() {
    return 'Hello World!';
});

$app->run();
