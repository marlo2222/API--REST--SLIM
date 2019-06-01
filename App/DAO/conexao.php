<?php 

namespace App\dao;
//observação seguindo a conexao no padrao sigleton

class Conexao{
    //atributo estatico para instanciar o pdo
    /**
     * @var \PDO
     */
    private static $pdo;
    

    //escondendo o construtor
    private function __construct(){

    }

    public static function getInstance(){
        if (!isset(self::$pdo)) {
            try {
                $host = Config::BD_HOST;
                $dbname = Config::BD_BANCO;
                $port = Config::BD_PORT;
                $user = Config::BD_USER;
                $pass = Config::BD_SENHA;
                
                $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',\PDO::ATTR_PERSISTENT => TRUE);
                
                $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";
                
                self::$pdo = new \PDO($dsn, $user, $pass, $opcoes);
                self::$pdo->setAttribute(
                    \PDO::ATTR_ERRMODE,
                    \PDO::ERRMODE_EXCEPTION
                );
                
            } catch (\PDOException $e) {
                echo "Erro" . $e->getMessage();
            }
        }
        return self::$pdo;
    }
}

?>
