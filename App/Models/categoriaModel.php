<?php

namespace App\Models;

final class CategoriaModel{
    private $id;
    private $nome;

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}