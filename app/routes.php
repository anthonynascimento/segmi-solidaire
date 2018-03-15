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
    $evenements['tous'] = $app['dao.evenement']->findFirstAllRandom();
    return $app['twig']->render('home.twig', array('evenements' => $evenements));
})->bind('home');

$app->get('/login', function () use ($app) {
    return $app['twig']->render('login.twig');
})->bind('login');

/***
 *** LES FORMULAIRES D'AJOUT ***
***/

/*ajout d'un evenement*/
$app->get('/AjoutEvenement', function () use ($app) {
    return $app['twig']->render('ajout_evenement.twig');
})->bind('ajouter_evenement');/*quand on clique sur ajouter un evenement*/

$app->post('/AjoutEvenement/ajouter', function () use ($app) {
    $app['dao.evenement']->ajouterEvenement();
    return $app['twig']->render('home.twig');
})->bind('ajout_evt');/*quand on clique sur le bouton d'ajout*/


/*ajout d'une aide pour un cours d'une matière*/
$app->get('/AjoutAideCours', function () use ($app) {
    return $app['twig']->render('ajout_aide_cours.twig');
})->bind('ajouter_aide');/*quand on clique sur ajouter une aide*/

$app->post('/AjoutAideCours/ajouter', function () use ($app) {
    $app['dao.cours']->ajouterAideCours();
    return $app['twig']->render('home.twig');/*redirection vers le home une fois le bouton cliqué*/
})->bind('ajout_aide');/*quand on clique sur le bouton d'ajout*/


/*ajout d'un mini-job*/
$app->get('/AjoutJob', function () use ($app) {
    return $app['twig']->render('ajout_job.twig');
})->bind('ajouter_job');/*quand on clique sur ajouter un mini-job*/

$app->post('/AjoutJob/ajouter', function () use ($app) {
    $app['dao.job']->ajouterMiniJob();
    return $app['twig']->render('home.twig');/*redirection vers le home une fois le bouton cliqué*/
})->bind('ajout_job');/*quand on clique sur le bouton d'ajout*/


/*ajout d'une annale*/
$app->get('/AjoutAnnale', function () use ($app) {
    return $app['twig']->render('ajout_annale.twig');
})->bind('ajouter_annale');/*quand on clique sur ajouter une annale*/

$app->post('/AjoutAnnale/ajouter', function () use ($app) {
    $app['dao.annale']->ajouterAnnale();
    return $app['twig']->render('home.twig');/*redirection vers le home une fois le bouton cliqué*/
})->bind('ajout_annale');/*quand on clique sur le bouton d'ajout*/


/*ajout d'un livre à vendre*/
$app->get('/AjoutLivre', function () use ($app) {
    return $app['twig']->render('ajout_livre.twig');
})->bind('ajouter_livre');/*quand on clique sur vendre des livres*/

$app->post('/AjoutLivre/ajouter', function () use ($app) {
    $app['dao.livre']->ajouterLivre();
    return $app['twig']->render('home.twig');/*redirection vers le home une fois le bouton cliqué*/
})->bind('ajout_livre');/*quand on clique sur le bouton d'ajout*/

///////////////////////////////ANNALES//////////////////////////////////////////
/*liste annales L1*/
$app->get('/listeAnnalesL1', function () use ($app) {
    $allAnnalesL1['toutes'] = $app['dao.annale']->findAllAnnalesL1();
    return $app['twig']->render('liste_annales_l1.twig', array('annales' => $allAnnalesL1));
})->bind('annales_l1');

/*liste annales L2*/
$app->get('/listeAnnalesL2', function () use ($app) {
    $allAnnalesL2['toutes'] = $app['dao.annale']->findAllAnnalesL2();
    return $app['twig']->render('liste_annales_l2.twig', array('annales' => $allAnnalesL2));
})->bind('annales_l2');


/*vue de l'annale choisie*/
$app->get('/annale/{id}', function ($id) use ($app) {
    $annale = $app['dao.annale']->find($id);
    return $app['twig']->render('annale_details.twig', array('annale' => $annale));
})->bind('annaleDetails');

///////////////////////////////COURS//////////////////////////////////////////
/*liste cours L1*/
$app->get('/listeCours', function () use ($app) {
    $cours['tous'] = $app['dao.cours']->findAllCoursL1();
    return $app['twig']->render('liste_cours_l1.twig',array('cours' => $cours));
})->bind('cours_l1');

$app->get('/cours/{id}', function ($id) use ($app) {
    $cours = $app['dao.cours']->find($id);
    return $app['twig']->render('cours_details.twig', array('cours' => $cours));
})->bind('coursDetails');

///////////////////////////////MINI-JOB//////////////////////////////////////////
$app->get('/jobs_all', function () use ($app) {
    $jobs['tous'] = $app['dao.job']->findFirstAll();
    return $app['twig']->render('liste_jobs_all.twig',array('jobs' => $jobs));
})->bind('jobs_all');

$app->get('/job/{id}', function ($id) use ($app) {
    $job = $app['dao.job']->find($id);
    return $app['twig']->render('job_details.twig', array('job' => $job));
})->bind('jobDetails');

///////////////////////////////EVENEMENTS//////////////////////////////////////////
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

///////////////////////////////LIVRES//////////////////////////////////////////
$app->get('/livres_all', function () use ($app) {
    $livres['tous'] = $app['dao.livre']->findFirstAll();
    return $app['twig']->render('liste_livres_all.twig',array('livres' => $livres));
})->bind('livres_all');

$app->get('/livre/{id}', function ($id) use ($app) {
    $livre = $app['dao.livre']->find($id);
    return $app['twig']->render('livre_details.twig', array('livre' => $livre));
})->bind('livreDetails');