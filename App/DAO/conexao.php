<?php
class Conexao{
    private static $pdo;

    private function __construct(){

    }
    public static function getInstance(){
        if (!isset($pdo)) {
            try {
                $host =
                $dbname =
                $port =  
                $user = 
                $pass =
                
                $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',\PDO::ATTR_PERSISTENT => TRUE);
                $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

                self::$pdo = new \PDO($dsn, $user, $pass, $opcoes);
                    self::$pdo->setAttribute(
                        \PDO::ATTR_ERRMODE,
                        \PDO::ERRMODE_EXCEPTION
                    );
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$pdo;
    }
}
