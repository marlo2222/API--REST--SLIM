<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Resquest;
use Psr\Http\Message\ResponseInterface  as Response;
use App\DAO\categoriaDAO;
use App\Models\CategoriaModel;

final class CategoriaController
{
    public function getCategoria(Resquest $request, Response $response, array $args){
        $categoriaDao = new categoriaDAO();
        $categoria = $categoriaDao->getAllCategoria();
        $response = $response->withJson([$categoria], 200);
        return $response;
    }
    public function insertCategoria(Resquest $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        $categoriaDao = new categoriaDAO();
        $categoria = new CategoriaModel();
        $categoria->setNome($data['nome']);

        $categoriaDao->insertCategoria($categoria);

        $response = $response->withJson(['message' => 'categoria inserida com sucesso', 200]);
        return $response;
    }
    public function updateCategoria(Resquest $request, Response $response, array $args)
    {

        return $response;
    }
    public function deleteCategoria(Resquest $request, Response $response, array $args)
    {
        return $response;
    }
}
