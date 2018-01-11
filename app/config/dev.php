<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',  //getenv("DB_1_PORT_3306_TCP_ADDR"),
    'port'     => '8888',
    'dbname'   => 'memorial-V3',
    'user'     => 'dev',
    'password' => 'test',
);

// enable the debug mode
$app['debug'] = true;

// define log parameters
$app['monolog.level'] = 'INFO';
