<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Resquest;
use Psr\Http\Message\ResponseInterface  as Response;                             

final class ProductController{
    
    public function getProduto(Resquest $request, Response $response, array $args)
    {
        return $response->getBody()->write("deu certo");    
    }
    public function insertProduto(Resquest $request, Response $response, array $args)
    {
		$data = $request->getParsedBody();
		$produtoModel = new ProdutoModel();
        
        return $response;    
    }
    public function updateProduto(Resquest $request, Response $response, array $args)
    {
        
        return $response;    
    }
    public function deleteProduto(Resquest $request, Response $response, array $args)
    {
        return $response;    
    }
}