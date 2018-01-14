<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Form\RechercheType;
use MicroCMS\Form\AddType;
use MicroCMS\Form\ContactType;
use MicroCMS\Domain\FindSoldat;
use MicroCMS\Domain\Soldat;

//  Appel des fonctions buildInsert et buildRequest
require_once "function.php";

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.twig');
})->bind('home');

$app->get('login', function () use ($app) {
    return $app['twig']->render('login.twig');
})->bind('login');

$app->get('cours', function () use ($app) {
    return $app['twig']->render('cours.twig');
})->bind('cours');
