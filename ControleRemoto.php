<?php
require_once("controlador.php");

class ControleRemoto implements Controlador {
	
	public $volume;
	public $ligado;

	public function __construct(){
		$this->volume = 0;
		$this->ligado = false;
	}

	public function setLigado($ligado){
		$this->ligado = $ligado;
	}

	public function getLigado(){
		return $this->ligado;
	}

	public function setVolume($volume){
		$this->volume = $volume;
	}

	public function getVolume(){
		return $this->volume;
	}

	public function ligar(){
		if ( !$this->getLigado() ) {
			$this->setLigado(true);
			echo "<li class='list-group-item'>\$controleRemoto->ligar()<br>Ligou</li>";
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->ligar()<br>Já está ligado</li>";
		}
	}

	public function desligar(){
		if ( $this->getLigado() ) {
			$this->setLigado(false);
			echo "<li class='list-group-item'>\$controleRemoto->desligar()<br>Desligou</li>";
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->desligar()<br>Já está desligado</li>";
		}
	}

	public function aumentarVolume(){
		if($this->ligado){
			if( $this->getVolume() != 100){
				$this->setVolume($this->getVolume()+5);
				echo "<li class='list-group-item'>\$controleRemoto->aumentarVolume()<br>Voume aumentado em 5 db, agora está em ".$this->getVolume()." db.</li>";
		 	} else {
		 		echo "<li class='list-group-item'>\$controleRemoto->aumentarVolume()<br>Já está no máximo</li>";
		 	}
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->aumentarVolume()<br>O aparelho está desligado</li>";
		}
	}

	public function diminuirVolume(){
		if($this->ligado){
			if( $this->getVolume() > 0){
				$this->setVolume($this->getVolume()-5);
				echo "<li class='list-group-item'>\$controleRemoto->diminuirVolume()<br>Voume diminuído em 5 db, agora está em ".$this->getVolume()." db.</li>";
		 	} else {
		 		echo "<li class='list-group-item'>\$controleRemoto->diminuirVolume()<br>Já está no mínimo</li>";
		 	}
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->diminuirVolume()<br>O aparelho está desligado</li>";
		}
	}

	public function ativarMudo(){
		if($this->ligado){
			if( $this->getVolume() != 0){
				$this->setVolume(0);
				echo "<li class='list-group-item'>\$controleRemoto->ativarMudo()<br>Voume mutado, agora está em ".$this->getVolume()." db.</li>";
		 	} else {
		 		echo "<li class='list-group-item'>\$controleRemoto->ativarMudo()<br>Já está no mudo</li>";
		 	}
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->ativarMudo()<br>O aparelho está desligado</li>";
		}
	}

	public function desativarMudo(){
		if($this->ligado){
			if( $this->getVolume() == 0){
				$this->setVolume(50);
				echo "<li class='list-group-item'>\$controleRemoto->desativarMudo()<br>Voume desmutado, agora está em ".$this->getVolume()." db.</li>";
		 	} else {
		 		echo "<li class='list-group-item'>\$controleRemoto->desativarMudo()<br>Não está está no mudo</li>";
		 	}
		} else {
			echo "<li class='list-group-item'>\$controleRemoto->desativarMudo()<br>O aparelho está desligado</li>";
		}
	}

}

?>