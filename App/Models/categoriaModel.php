<?php

namespace App\Models;

class CategoriaModel{
	/**
	* @var int
	*/
    private $id;
	/**
	* @var string
	*/
    public $nome;
	/**
	* @return int
	*/
    public function getId()
    {
        return $this->id;
    }
	/**
	* @return string
	*/
    public function getNome()
    {
        return $this->nome;
    }
    /**
	* @param string $nome
	*/
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
}