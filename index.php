<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

require __DIR__ . '/app/config/prod.php'; //prod.php ou dev
require __DIR__ . '/app.php';
require __DIR__ . '/app/routes.php';
$app->run();