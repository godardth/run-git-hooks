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
	
	$files = array_diff(scandir('./shell_scripts'), ['..', '.']);
	$scripts = [];
	foreach($files as $file)
		array_push($scripts, [
			'name' => substr($file,0,strlen($file)-3),
			'filename' => $file
		]);
	
    $app->render('index.html', [
    	'scripts' => $scripts,
    	'files' => $files
    ]);
});
$app->post('/run/:filename', function ($filename) {
	exec('./shell_scripts/'.$filename.'.sh 2>&1', $output);
});
$app->post('/run', function () use ($app) {
	
	$filename = $app->request->post('filename');
	exec('./shell_scripts/'.$filename.'  2>&1', $output);
	
	$app->response->headers->set('Content-Type', 'application/json');
	echo json_encode([
		'filename' => $filename,
		'output' => $output
	]);
});

$app->run();

?>
