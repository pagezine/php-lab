<?php
class Produto {
	private $descricao; //public
	private $preco;
	
	public function __construct($descricao, $preco){
		//echo 'meu objeto';
		$this->descricao = $descricao;
		$this->preco = $preco;
	}
	
	public function getDetalhes() {	
		return "O produto {$this->descricao} custa {$this->preco} reais";
	}
	
	public function setDescricao($valor){
		$this->descricao = $valor;
	}
	
	public function setPreco($valor){
		$this->preco = $valor;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function getPreco(){
		return $this->preco;
	}
	
}

$p1 = new Produto('<b>Meu Livro</b>',150);
      
//$p1->setDescricao('Livro');  //usando public fica: $p1->descricao = 'Livro';
//$p1->setPreco(50);		     //usando public fica: $p1->preco = 50;

echo $p1->getDetalhes();

//echo '<p>';
//echo 'Este nome: ', $p1->getDescricao();
//echo '<p>';
//echo $p1->getPreco(),' reais';

//var_dump($p1);
