<?php

// web/index.php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;  // set to 'false' in production

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' => 'DB_NAME',
        'user' => 'DB_USER',
        'password' => 'DB_PASSWORD',
        'host' => 'DB_HOST',
        'driver' => 'pdo_mysql',
        'charset' => 'utf8',
    ),
));

$app->get('/marker', function (Request $request) use ($app) {
    $searchterm = $request->get('search');
    if ($searchterm == null || $searchterm === '') {
        $markers = $app['db']->fetchAll('SELECT * FROM marker');
        return $app->json($markers);
    } else {
        $markers = $app['db']->fetchAll('SELECT * FROM marker WHERE tags LIKE ? OR provider LIKE ?', array('%'.$searchterm.'%', '%'.$searchterm.'%'));
        return $app->json($markers);
    }
});

$app->get('/marker/{id}', function ($id) use ($app) {
    $markers = $app['db']->fetchAssoc('SELECT * FROM marker WHERE id = ?', array((int)$id));
    return $app->json($markers);
});

$app->post('/marker', function (Request $request) use ($app) {
    $title = $request->get('title');
    $description = $request->get('description');
    $lat = $request->get('lat');
    $lng = $request->get('lng');
    $homepage = $request->get('homepage');
    $email = $request->get('email');
    $inserted = date("Y-m-d H:i:s");
    $app['db']->insert('marker', array('title' => $title, 'description' => $description, 'lat' => $lat, 'lng' => $lng, 'homepage' => $homepage, 'email' => $email, 'inserted' => $inserted));

    return new Response('new marker created', 201);
});


$app->get('/tag', function () use ($app) {
    $tags = $app['db']->fetchAll('SELECT * FROM tag');
    return $app->json($tags);
});

$app->run();
