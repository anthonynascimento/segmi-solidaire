<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
));

$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());


$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'default' => array(
            'pattern' => '^.*$',
            'anonymous' => true, // Indispensable car la zone de login se trouve dans la zone sécurisée (tout le front-office)
            'form' => array('login_path' => '/login', 'check_path' => 'connexion'),
            'logout' => array('logout_path' => '/deconnexion'), // url à appeler pour se déconnecter
            'users' => $app->share(function() use ($app) {
                // La classe App\User\UserProvider est spécifique à notre application et est décrite plus bas
                return new MicroCMS\DAO\UtilisateurDAO($app['db']);
            }),
        ),
    ),
    'security.role_hierarchy' => array(
        'ROLE_USER' => array(),
        'ROLE_ADMIN' => array('ROLE_USER','ROLE_ADMINISTRATEUR'),
        //'ROLE_SUPER_ADMIN' => array('ROLE_USER','ROLE_ADMINISTRATEUR','ROLE_ALLOWED_TO_SWITCH'),
    ),
    'security.access_rules' => array(
        /*array('^/etudiant', 'ROLE_USER'),*/
        array('^/admin', 'ROLE_ADMINISTRATEUR'),
        //array('^/root', 'ROLE_SUPER_ADMIN'),
    ),
));


/*
$app['dao.info'] = $app->share(function ($app) {
    $commentDAO = new MicroCMS\DAO\InfoDAO($app['db']);
    $commentDAO->setSoldaDAO($app['dao.soldats']);
    return $commentDAO;
});
*/
$app['dao.evenement'] = $app->share(function ($app) {
    return new MicroCMS\DAO\EvenementDAO($app['db']);
});
$app['dao.utilisateur'] = $app->share(function ($app) {
    return new MicroCMS\DAO\UtilisateurDAO($app['db']);
});

$app['dao.cours'] = $app->share(function ($app) {
    return new MicroCMS\DAO\CoursDAO($app['db']);
});

$app['dao.job'] = $app->share(function ($app) {
    return new MicroCMS\DAO\JobDAO($app['db']);
});

$app['dao.annale'] = $app->share(function ($app) {
    return new MicroCMS\DAO\AnnaleDAO($app['db']);
});

$app['dao.livre'] = $app->share(function ($app) {
    return new MicroCMS\DAO\LivreDAO($app['db']);
});

$app['dao.inscription'] = $app->share(function ($app) {
    return new MicroCMS\DAO\InscriptionDAO($app['db']);
});

$app['dao.etudiant'] = $app->share(function ($app) {
    return new MicroCMS\DAO\EtudiantDAO($app['db']);
});

$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/var/logs/microcms.log',
    'monolog.name' => 'MicroCMS',
    'monolog.level' => $app['monolog.level']
));

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
if (isset($app['debug']) && $app['debug']) {
    $app->register(new Silex\Provider\HttpFragmentServiceProvider());
    $app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => __DIR__ . '/var/cache/profiler'
    ));
}

// Register error handler
$app->error(function (\Exception $e, $code) use ($app) {
    switch ($code) {
        case 403:
            $message = 'Access denied.';
            echo "<br><br><br><br><br><br><br>";
            break;
        case 404:
            $message = 'The requested resource could not be found.';
            break;
        default:
            $message = "Something went wrong.";
    }
    return $app['twig']->render('error.twig', array('message' => $message));
});
