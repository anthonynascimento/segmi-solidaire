<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Form\RechercheType;
use MicroCMS\Form\AddType;
use MicroCMS\Form\ContactType;
use MicroCMS\Domain\FindSoldat;
use MicroCMS\Domain\Soldat;

//  Appel des fonctions buildInsert et buildRequest
require_once "function.php";


/**
 * **************************************** PARTIE FRONTOFFICE *******************************************
 */

/**
 * page d'accueil "memorial.nancy.fr"
 * home.twig
 */
$app->get('/', function () use ($app) {
    return $app['twig']->render('home.twig');
})->bind('home');

