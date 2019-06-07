<?php
namespace App\DAO;

use App\Models\CategoriaModel;
use App\DAO\Config;
use App\dao\Conexao;

class categoriaDAO{
    //select all
    public function getAllCategoria(){
        $pdo = Conexao::getInstance();
        $result = $pdo->query('SELECT id, nome FROM categorias')->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    //insert
    public function insertCategoria(array $dados)
	{
        $pdo  = Conexao::getInstance();
        $statement = $pdo->prepare('INSERT INTO categorias VALUES (
		null,
		:nome); ');

        $statement-> execute([
            'nome' => $dados['nome']
        ]);
    }
    public function deleteCategoria(array $args){
        $pdo = Conexao::getInstance();

        $statement = $pdo->prepare('DELETE FROM categorias WHERE id=:id;');
        $statement->execute([
            'id' => $args['id']
        ]);
    }
}
?>