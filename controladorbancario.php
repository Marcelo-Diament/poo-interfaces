<?php

interface ControladorBancario {
	function abrirConta();
	function fecharConta();
	function depositar();
	function sacar();
	function verSaldo();
	function verSituacao();
}

?>