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
        ),
    ),
    'security.access_rules' => array(
        // ROLE_USER est défini arbitrairement, vous pouvez le remplacer par le nom que vous voulez
        array('^/ad/', 'ROLE_ADMIN')
    )
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
            break;
        case 404:
            $message = 'The requested resource could not be found.';
            break;
        default:
            $message = "Something went wrong.";
    }
    return $app['twig']->render('error.twig', array('message' => $message));
});
