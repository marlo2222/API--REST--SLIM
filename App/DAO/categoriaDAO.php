<?php
namespace App\DAO;

use App\Models\CategoriaModel;
use App\DAO\Config;

class categoriaDAO{
    //select all
    public function getAllCategoria(){
        $pdo = Conexao::getInstance();
        $result = $pdo->query('SELECT id, nome FROM categorias')->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    //insert
    public function insertCategoria(CategoriaModel $categoria){
        $pdo  = Conexao::getInstance();
        $statement = $pdo->prepare('INSERT INTO categorias VALUES(null,:nome);');

        $statement-> execute([
            'nome' => $categoria->getNome()
        ]);
    }
}
?>