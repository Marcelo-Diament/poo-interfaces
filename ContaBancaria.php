<?php
require_once("controladorbancario.php");

class ContaBancaria implements ControladorBancario {
	
	public $situacao;
	private $saldo;

	public function __construct(){
		$this->situacao = false;
		$this->saldo = 0;
	}

	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}

	public function getSituacao(){
		return $this->situacao;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function abrirConta(){
		if ( !$this->getSituacao() ) {
			$this->setSituacao(true);
			echo "<li class='list-group-item'>\$correntista->abrirConta()<br>Conta Aberta</li>";
		} else {
			echo "<li class='list-group-item'>\$correntista->abrirConta()<br>Já é cliente</li>";
		}
	}

	public function fecharConta(){
		if ( $this->getSituacao() ) {
			$this->setSituacao(false);
			echo "<li class='list-group-item'>\$correntista->fecharConta()<br>Fechou a conta</li>";
		} else {
			echo "<li class='list-group-item'>\$correntista->fecharConta()<br>Não possui conta</li>";
		}
	}

	public function depositar(){
		if($this->situacao){
			$this->setSaldo($this->getSaldo()+5);
			echo "<li class='list-group-item'>\$correntista->depositar()<br>Saldo aumentado em R$ 5,00, agora está em R$ ".$this->getSaldo().",00</li>";
		} else {
			echo "<li class='list-group-item'>\$correntista->depositar()<br>Abra uma conta para então depositar</li>";
		}
	}

	public function sacar(){
		if($this->situacao){
			if( $this->getSaldo() >= 5){
				$this->setSaldo($this->getSaldo()-5);
				echo "<li class='list-group-item'>\$correntista->sacar()<br>Saldo diminuído em R$ 5,00, agora está em R$ ".$this->getSaldo().",00</li>";
		 	} else {
		 		echo "<li class='list-group-item'>\$correntista->sacar()<br>Saldo insuficiente... molhou...</li>";
		 	}
		} else {
			echo "<li class='list-group-item'>\$correntista->sacar()<br>Você não possui conta conosco.</li>";
		}
	}

	public function verSaldo(){
		if($this->situacao){
			echo "<li class='list-group-item'>\$correntista->verSaldo()<br>Seu saldo é de R$ ".$this->getSaldo().",00</li>";
		} else {
			echo "<li class='list-group-item'>\$correntista->verSaldo()<br>Você não possui conta nesse banco</li>"; 
		}
	}

	public function verSituacao(){
		if($this->situacao){
			echo "<li class='list-group-item'>\$correntista->verSituacao()<br>Você tem conta aberta, seu saldo atual é de R$ ".$this->getSaldo().",00</li>";
	 	} else {
	 		echo "<li class='list-group-item'>\$correntista->verSituacao()<br>Você não possui conta nesse banco</li>";
	 	}
	}

}

?>