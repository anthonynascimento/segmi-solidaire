<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Form\RechercheType;
use MicroCMS\Form\AddType;
use MicroCMS\Form\ContactType;
use MicroCMS\Domain\Evenement;
use MicroCMS\Domain\Soldat;

//  Appel des fonctions buildInsert et buildRequest
require_once "function.php";

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.twig');
})->bind('home');

$app->get('/listeEven', function () use ($app) {
    $evenements['tous'] = $app['dao.evenement']->findFirstAll();
    return $app['twig']->render('evenement.twig',array('evenements'=>$evenements ));
})->bind('evenement');



$app->get('/login', function () use ($app) {
    return $app['twig']->render('login.twig');
})->bind('login');

$app->get('/cours', function () use ($app) {
    return $app['twig']->render('cours.twig');
})->bind('cours');
