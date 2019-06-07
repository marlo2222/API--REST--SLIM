<?php

use function src\slimConfiguration;
use App\Controllers\ProductController;
use App\Controllers\CategoriaController;

$app = new \Slim\App(slimConfiguration());
$app->get('/produto', ProductController::class . ':getProduto');
$app->get('/produto', ProductController::class . ':insertProduto');


//================================================
$app->get('/categoria', CategoriaController::class. ':getCategoria');
$app->post('/categoria', CategoriaController::class. ':insertCategoria');
$app->delete('/categoria', CategoriaController::class. ':deleteCategoria');

$app->run();
?>