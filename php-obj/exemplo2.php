<?php
class Fabricante {
	private $nome;
	
	public function __construct($nome){
		$this->nome = $nome;
	}
	
	public	function getNome(){
		return $this->nome;
	}
}

class Produto {
	private $descricao;
	private $preco;
	private $fabricante;
	
	public function __construct($descricao, $preco, Fabricante $fabricante){
		//echo 'meu objeto';
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->fabricante = $fabricante;
	}
	
	public function getDetalhes() {	
		return "O produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
	}	
}

$f1 = new Fabricante('Editora Zerovox');
$p1 = new Produto('<b>Meu Livro</b>',150, $f1);

echo $p1->getDetalhes();

//var_dump($p1);

// local do video - código - dt. 10/12/2021
// https://www.youtube.com/watch?v=_mBqvoSJIBU&t=436s