<?php

namespace App\Models;

class ProdutoModel{
	private $id;
	private $nome;
	private $preco;
	private $data;
	private $idCategoria;
	
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function seNome(string $nome){
		$this->nome = $nome;
	}
	public function getPreco(){
		return $this->preco;
	}
	public function setPreco(float $preco){
		$this->preco = $preco;
	}
	public function getData(){
		return $this->data;
	}
	public function setData(date $data){
		$this->data = $data;
	}
	public function setIdCategoria(int $id){
		$this->idCategoria = $id;
	}
	public function getIdCategoria(){
		return $this->idCategoria;
	}
}


?>