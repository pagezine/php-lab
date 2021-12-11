<?php
abstract class Conta {
	protected $agencia;
	protected $conta;
	protected $saldo;
	
	// abstract = esta classe não pode ser instanciada
	// final = esta classe não pode ser herdada
	
	public function __construct($agencia, $conta, $saldo){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
	}
	
	public function getDetalhes(){
		return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
	}
	
	public function depositar($valor){
		$this->saldo += $valor;
		echo "Depósito de: {$valor} | Saldo atual: {$this->saldo}<br />";
	}
}

final class Poupanca extends Conta{ // classe extendida de Conta
	public function saque($valor){
		if ($this->saldo >= $valor):
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
		else:
			echo "Saque não autorizado: {$valor} | Saldo atual: {$this->saldo}<br />";
		endif;
	}
}

final class Corrente extends Conta{ // classe extendida de Conta
	protected $limite;
	
	public function __construct($agencia, $conta, $saldo, $limite){
		parent::__construct($agencia, $conta, $saldo); // herdando do construtor
		$this->limite = $limite;
	}	
	
	public function saque($valor){
		if (($this->saldo + $this->limite) >= $valor):
			$this->saldo -= $valor;
			echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
		else:
			echo "Saque não autorizado: {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite}<br />";
		endif;
	}
}

// testando poupanca
//$c1 = new Poupanca(1601,1234,55000); // agencia - conta - saldo
//$c1->depositar(1800);
//$c1->saque(2000);
//$c1->saque(60000);

// testando corrente
$c1 = new Corrente(1601,1234,5000,500); // agencia - conta - saldo - limite
$c1->depositar(1800);
$c1->saque(2500);
$c1->saque(4500);

echo $c1->getDetalhes();

//var_dump($p1);

// local do video - código - dt. 10/12/2021
// https://www.youtube.com/watch?v=_mBqvoSJIBU&t=436s