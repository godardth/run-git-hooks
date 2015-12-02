<?php
// For Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Composer Autoloader
require 'vendor/autoload.php';

// Application Creation
$config = require('config.php');
$app = new \Slim\Slim(array_merge($config, [
    'view' => new \Slim\Views\Twig()
]));

// Twig Options
$view = $app->view();
$view->parserOptions = [
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
];

// Routes Definition
$app->get('/hello/:name', function ($name) use ($app) {
    $app->render('test.html', ['name' => $name]);
});
$app->get('/layout', function () use ($app) {
    $app->render('layout.html');
});

$app->run();

?>
