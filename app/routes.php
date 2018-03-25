<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Form\RechercheType;
use MicroCMS\Form\AddType;
use MicroCMS\Form\ContactType;
use MicroCMS\Domain\Evenement;

//  Appel des fonctions buildInsert et buildRequest
require_once "function.php";

$app->get('/', function () use ($app) {
    $evenements['tous'] = $app['dao.evenement']->findFirstAllRandom();
    return $app['twig']->render('home.twig', array('evenements' => $evenements));
})->bind('home');

$app->get('/inscription', function () use ($app) {
    return $app['twig']->render('inscription.twig');
})->bind('inscription');

$app->post('/ajouter', function () use ($app) {
    $mdp = $app['security.encoder.digest']->encodePassword($_POST['mdp'], '');
    $app['dao.inscription']->verifCompte($mdp);
    return $app['twig']->render('login.twig');
})->bind('ajout');


$app->get('/login', function (Request $request) use ($app) {
    return $app['twig']->render('login.twig', array(
        'error' => $app['security.last_error']($request),/*dans app.php si la connexion échoue*/
    ));
})->bind('login');

/********
 ****ADMIN******
 ********/
/*accueil admin*/
$app->get('/admin', function () use ($app) {
    $etudiants['tous'] = $app['dao.etudiant']->findFirstAll();
    return $app['twig']->render('admin_accueil.twig', array('etudiants' => $etudiants));
})->bind('gestion_admin_accueil');/*placer se bouton dans l'acceuil avec if admin is granted*/

/*suppression etudiant*/
$app->get('/admin/supprimerEtudiant/{id}', function ($id) use ($app) {
    $etudiants['tous'] = $app['dao.etudiant']->findFirstAll();
    $app['dao.etudiant']->supprimerEtudiant($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin");
    return $app['twig']->render('admin_accueil.twig', array('etudiants' => $etudiants));
})->bind('supprimerEtudiant');

/****Evenement*****/
/*liste evenements admin*/
$app->get('/admin/evenements', function () use ($app) {
    $evenements['tous'] = $app['dao.evenement']->findFirstAll();
    return $app['twig']->render('admin_evenements.twig', array('evenements' => $evenements));
})->bind('gestion_admin_evenements');

/*suppression evenement*/
$app->get('/admin/supprimerEvenement/{id}', function ($id) use ($app) {
    $evenements['tous'] = $app['dao.evenement']->findFirstAll();
    $app['dao.evenement']->supprimerEvenement($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin/evenements");
    return $app['twig']->render('admin_evenements.twig', array('evenements' => $evenements));
})->bind('supprimerEvenement');

/****Cours*****/
/*liste cours admin*/
$app->get('/admin/cours', function () use ($app) {
    $cours['tous'] = $app['dao.cours']->findFirstAll();
    return $app['twig']->render('admin_cours.twig', array('cours' => $cours));
})->bind('gestion_admin_cours');

/*suppression cours*/
$app->get('/admin/supprimerCours/{id}', function ($id) use ($app) {
    $cours['tous'] = $app['dao.cours']->findFirstAll();
    $app['dao.cours']->supprimerCours($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin/cours");
    return $app['twig']->render('admin_cours.twig', array('cours' => $cours));
})->bind('supprimerCours');

/****Annales*****/
/*liste annales admin*/
$app->get('/admin/annales', function () use ($app) {
    $annales['tous'] = $app['dao.annale']->findFirstAll();
    return $app['twig']->render('admin_annales.twig', array('annales' => $annales));
})->bind('gestion_admin_annales');

/*suppression annale*/
$app->get('/admin/supprimerAnnale/{id}', function ($id) use ($app) {
    $annales['tous'] = $app['dao.annale']->findFirstAll();
    $app['dao.annale']->supprimerAnnale($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin/annales");
    return $app['twig']->render('admin_annales.twig', array('annales' => $annales));
})->bind('supprimerAnnale');

/****Jobs*****/
/*liste jobs admin*/
$app->get('/admin/jobs', function () use ($app) {
    $jobs['tous'] = $app['dao.job']->findFirstAll();
    return $app['twig']->render('admin_jobs.twig', array('jobs' => $jobs));
})->bind('gestion_admin_jobs');

/*suppression job*/
$app->get('/admin/supprimerJob/{id}', function ($id) use ($app) {
    $jobs['tous'] = $app['dao.job']->findFirstAll();
    $app['dao.job']->supprimerJob($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin/jobs");
    return $app['twig']->render('admin_jobs.twig', array('jobs' => $jobs));
})->bind('supprimerJob');

/****Livres*****/
/*liste livres à vendre admin*/
$app->get('/admin/livres', function () use ($app) {
    $livres['tous'] = $app['dao.livre']->findFirstAll();
    return $app['twig']->render('admin_livres.twig', array('livres' => $livres));
})->bind('gestion_admin_livres');

/*suppression livre*/
$app->get('/admin/supprimerLivre/{id}', function ($id) use ($app) {
    $livres['tous'] = $app['dao.livre']->findFirstAll();
    $app['dao.livre']->supprimerLivre($id);
    $delai = 2;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/admin/livres");
    return $app['twig']->render('admin_livres.twig', array('livres' => $livres));
})->bind('supprimerLivre');


/***
 *** LES FORMULAIRES D'AJOUT ***
 ***/

/*ajout d'un evenement*/
$app->get('/AjoutEvenement', function () use ($app) {
    return $app['twig']->render('ajout_evenement.twig');
})->bind('ajouter_evenement');/*quand on clique sur ajouter un evenement*/

$app->post('/AjoutEvenement/ajouter', function () use ($app) {
    $app['dao.evenement']->ajouterEvenement();
    $delai = 0;
    header("Refresh: $delai;url=http://localhost/segmi-solidaire/");
    return $app['twig']->render('home.twig');
})->bind('ajout_evt');/*quand on clique sur le bouton d'ajout*/


/*ajout d'une aide pour un cours d'une matière*/
$app->get('/AjoutAideCours', function () use ($app) {
    return $app['twig']->render('ajout_aide_cours.twig');
})->bind('ajouter_aide');/*quand on clique sur ajouter une aide*/

$app->post('/AjoutAideCours/ajouter', function () use ($app) {
    $app['dao.cours']->ajouterAideCours();
    $cours['tous'] = $app['dao.cours']->findFirstAll();
    return $app['twig']->render('liste_cours.twig', array('cours' => $cours));
})->bind('ajout_aide');/*quand on clique sur le bouton d'ajout*/


/*ajout d'un mini-job*/
$app->get('/AjoutJob', function () use ($app) {
    return $app['twig']->render('ajout_job.twig');
})->bind('ajouter_job');/*quand on clique sur ajouter un mini-job*/

$app->post('/AjoutJob/ajouter', function () use ($app) {
    $app['dao.job']->ajouterMiniJob();
    $jobs['tous'] = $app['dao.job']->findFirstAll();
    return $app['twig']->render('liste_jobs_all.twig', array('jobs' => $jobs));
})->bind('ajout_job');/*quand on clique sur le bouton d'ajout*/


/*ajout d'une annale*/
$app->get('/AjoutAnnale', function () use ($app) {
    return $app['twig']->render('ajout_annale.twig');
})->bind('ajouter_annale');/*quand on clique sur ajouter une annale*/

$app->post('/AjoutAnnale/ajouter', function () use ($app) {
    $app['dao.annale']->ajouterAnnale();
    $allAnnales['toutes'] = $app['dao.annale']->findFirstAll();
    return $app['twig']->render('liste_annales.twig', array('annales' => $allAnnales));
})->bind('ajout_annale');/*quand on clique sur le bouton d'ajout*/


/*ajout d'un livre à vendre*/
$app->get('/AjoutLivre', function () use ($app) {
    return $app['twig']->render('ajout_livre.twig');
})->bind('ajouter_livre');/*quand on clique sur vendre des livres*/

$app->post('/AjoutLivre/ajouter', function () use ($app) {
    $app['dao.livre']->ajouterLivre();
    $livres['tous'] = $app['dao.livre']->findFirstAll();
    return $app['twig']->render('liste_livres_all.twig', array('livres' => $livres));/*redirection*/
})->bind('ajout_livre');/*quand on clique sur le bouton d'ajout*/

///////////////////////////////ANNALES//////////////////////////////////////////

/*liste de toutes les annales*/
$app->get('/listeAnnales', function () use ($app) {
    $allAnnales['toutes'] = $app['dao.annale']->findFirstAll();
    return $app['twig']->render('liste_annales.twig', array('annales' => $allAnnales));
})->bind('annales');

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

$app->get('/listeAnnalesL3', function () use ($app) {
    $allAnnalesL3['toutes'] = $app['dao.annale']->findAllAnnalesL3();
    return $app['twig']->render('liste_annales_l3.twig', array('annales' => $allAnnalesL3));
})->bind('annales_l3');

$app->get('/listeAnnalesM1', function () use ($app) {
    $allAnnalesM1['toutes'] = $app['dao.annale']->findAllAnnalesM1();
    return $app['twig']->render('liste_annales_m1.twig', array('annales' => $allAnnalesM1));
})->bind('annales_m1');

$app->get('/listeAnnalesM2', function () use ($app) {
    $allAnnalesM2['toutes'] = $app['dao.annale']->findAllAnnalesM2();
    return $app['twig']->render('liste_annales_m2.twig', array('annales' => $allAnnalesM2));
})->bind('annales_m2');


/*vue de l'annale choisie*/
$app->get('/annale/{id}', function ($id) use ($app) {
    $annale = $app['dao.annale']->find($id);
    return $app['twig']->render('annale_details.twig', array('annale' => $annale));
})->bind('annaleDetails');

///////////////////////////////COURS//////////////////////////////////////////

/*liste de tous les cours*/
$app->get('/listeCours', function () use ($app) {
    $coursAll['tous'] = $app['dao.cours']->findFirstAll();
    return $app['twig']->render('liste_cours.twig', array('cours' => $coursAll));
})->bind('cours');

/*liste cours L1*/
$app->get('/listeCoursL1', function () use ($app) {
    $coursL1['tous'] = $app['dao.cours']->findAllCoursL1();
    return $app['twig']->render('liste_cours_l1.twig', array('cours' => $coursL1));
})->bind('cours_l1');

/*liste cours L2*/
$app->get('/listeCoursL2', function () use ($app) {
    $coursL2['tous'] = $app['dao.cours']->findAllCoursL2();
    return $app['twig']->render('liste_cours_l2.twig', array('cours' => $coursL2));
})->bind('cours_l2');

/*liste cours L3*/
$app->get('/listeCoursL3', function () use ($app) {
    $coursL3['tous'] = $app['dao.cours']->findAllCoursL3();
    return $app['twig']->render('liste_cours_l3.twig', array('cours' => $coursL3));
})->bind('cours_l3');

/*liste cours M1*/
$app->get('/listeCoursM1', function () use ($app) {
    $coursM1['tous'] = $app['dao.cours']->findAllCoursM1();
    return $app['twig']->render('liste_cours_m1.twig', array('cours' => $coursM1));
})->bind('cours_m1');

/*liste cours M2*/
$app->get('/listeCoursM2', function () use ($app) {
    $coursM2['tous'] = $app['dao.cours']->findAllCoursM2();
    return $app['twig']->render('liste_cours_m2.twig', array('cours' => $coursM2));
})->bind('cours_m2');

/*vue du cours choisi*/
$app->get('/cours/{id}', function ($id) use ($app) {
    $cours = $app['dao.cours']->find($id);
    return $app['twig']->render('cours_details.twig', array('cours' => $cours));
})->bind('coursDetails');

///////////////////////////////MINI-JOB//////////////////////////////////////////
$app->get('/jobs_all', function () use ($app) {
    $jobs['tous'] = $app['dao.job']->findFirstAll();
    return $app['twig']->render('liste_jobs_all.twig', array('jobs' => $jobs));
})->bind('jobs_all');

$app->get('/job/{id}', function ($id) use ($app) {
    $job = $app['dao.job']->find($id);
    return $app['twig']->render('job_details.twig', array('job' => $job));
})->bind('jobDetails');

///////////////////////////////EVENEMENTS//////////////////////////////////////////
$app->get('/listeEven', function () use ($app) {
    $evenements['tous'] = $app['dao.evenement']->findFirstAll();
    return $app['twig']->render('liste_evenement.twig', array('evenements' => $evenements));
})->bind('evenement');

$app->get('/listeSport', function () use ($app) {
    $evenementsSport['tous'] = $app['dao.evenement']->findFirstAllSport();
    return $app['twig']->render('liste_evenementSport.twig', array('evenementsSport' => $evenementsSport));
})->bind('evenementSport');

$app->get('/listeSoiree', function () use ($app) {
    $evenementsSoiree['tous'] = $app['dao.evenement']->findFirstAllSoiree();
    return $app['twig']->render('liste_evenementSoiree.twig', array('evenementsSoiree' => $evenementsSoiree));
})->bind('evenementSoiree');

$app->get('/listeConference', function () use ($app) {
    $evenementsConf['tous'] = $app['dao.evenement']->findFirstAllConf();
    return $app['twig']->render('liste_evenementConference.twig', array('evenementsConf' => $evenementsConf));
})->bind('evenementConf');


$app->get('/evenement/{id}', function ($id) use ($app) {
    $evenement = $app['dao.evenement']->find($id);
    return $app['twig']->render('evenement_details.twig', array('evenement' => $evenement));
})->bind('evenementDetails');

///////////////////////////////LIVRES//////////////////////////////////////////
$app->get('/livres_all', function () use ($app) {
    $livres['tous'] = $app['dao.livre']->findFirstAll();
    return $app['twig']->render('liste_livres_all.twig', array('livres' => $livres));
})->bind('livres_all');

$app->get('/livre/{id}', function ($id) use ($app) {
    $livre = $app['dao.livre']->find($id);
    return $app['twig']->render('livre_details.twig', array('livre' => $livre));
})->bind('livreDetails');
