<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Resquest;
use Psr\Http\Message\ResponseInterface  as Response;                             

final class ProductController{
    
    public function getProducts(Resquest $request, Response $response, array $args)
    {
        return $response->getBody()->write("deu certo");    
    }
    public function insertProduct(Resquest $request, Response $response, array $args)
    {
        
        return $response;    
    }
    public function updateProduct(Resquest $request, Response $response, array $args)
    {
        
        return $response;    
    }
    public function deleteProduct(Resquest $request, Response $response, array $args)
    {
        return $response;    
    }
}