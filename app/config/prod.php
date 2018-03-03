<?php

// Deployment on Heroku with ClearDB for MySQL
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$server = $url["host"];
//$username = $url["user"];
//$password = $url["pass"];
$db = substr($url["path"], 1);

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',  //getenv("DB_1_PORT_3306_TCP_ADDR"),
    'port'     => '3306',
    'dbname'   => 'segmiSolidaire',
    'user'     => 'dorian',
    'password' => 'dodo',
);

// define log parameters
$app['monolog.level'] = 'WARNING';

