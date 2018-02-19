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
    return $app['twig']->render('liste_evenement.twig',array('evenements'=>$evenements ));
})->bind('evenement');

$app->get('/listeSport', function () use ($app) {
    $evenementsSport['tous'] = $app['dao.evenement']->findFirstAllSport();
    return $app['twig']->render('liste_evenementSport.twig',array('evenementsSport'=>$evenementsSport ));
})->bind('evenementSport');

$app->get('/listeSoiree', function () use ($app) {
    $evenementsSoiree['tous'] = $app['dao.evenement']->findFirstAllSoiree();
    return $app['twig']->render('liste_evenementSoiree.twig',array('evenementsSoiree'=>$evenementsSoiree ));
})->bind('evenementSoiree');

$app->get('/listeConference', function () use ($app) {
    $evenementsConf['tous'] = $app['dao.evenement']->findFirstAllConf();
    return $app['twig']->render('liste_evenementConference.twig',array('evenementsConf'=>$evenementsConf ));
})->bind('evenementConf');


$app->get('/evenement/{id}', function ($id) use ($app) {
    $evenement = $app['dao.evenement']->find($id);
    return $app['twig']->render('evenement.twig', array('evenement' => $evenement));
})->bind('evenement_detail');



$app->get('/login', function () use ($app) {
    return $app['twig']->render('login.twig');
})->bind('login');

$app->get('/cours', function () use ($app) {
    return $app['twig']->render('cours.twig');
})->bind('cours');
