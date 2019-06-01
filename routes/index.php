<?php

use function src\slimConfiguration;
use App\Controllers\ProductController;
use App\Controllers\CategoriaController;

$app = new \Slim\App(slimConfiguration());
$app->get('/produto', ProductController::class . ':getProducts');


//================================================
$app->get('/categoria', CategoriaController::class. ':getCategoria');
$app->post('/categoria', CategoriaController::class. ':insertCategoria');

$app->run();
?>