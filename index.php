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
$app->get('/', function () use ($app) {
	
	$data = scandir('./shell_scripts');
	
	$scripts = [
		[
			'name' => 'Sample script',
		],
		[
			'name' => 'Second script',
		],
	];
	
    $app->render('index.html', [
    	'scripts' => $scripts,
    	'data' => $data
    ]);
});
$app->get('/hello/:name', function ($name) use ($app) {
    $app->render('test.html', ['name' => $name]);
});

$app->run();

?>
