<?php
    require_once("ControleRemoto.php");
    require_once("ContaBancaria.php");
?>
<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<title>POO | Interfaces</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5, shrink-to-fit=no">
	<meta http-equiv="Cache-control" content="public">
	<meta name="title" content="POO | Interfaces">
	<meta name="description" content="POO | Interfaces e Sobrecarga de Métodos">
	<meta name="revisit-after" content="30 days">
	<meta name="identifier-URL" content="https://djament.com.br/estudos/poo-interfaces/index.php">
	<meta name="abstract" content="POO | Interfaces">
	<meta name="author" content="Marcelo Diament, Djament Comunicação">
	<meta name="robots" content="index,follow">
	<meta name="contact" content="contato@djament.com.br">
	<meta name="reply-to" content="contato@djament.com.br">
	<meta name="copyright" content="Djament">
	<meta name="rating" content="general">
	<meta name="web_author" content="Djament Comunicação">
	<meta name="theme-color" content="#000000">
	<meta property="og:site_name" content="Djament | POO | Interfaces">
	<meta property="og:title" content="POO | Interfaces">
	<meta property="og:description" content="POO | Interfaces e Sobrecarga de Métodos">
	<meta property="og:url" content="https://djament.com.br/estudos/poo-interfaces/index.php">
	<meta property="og:locale" content="pt-BR">
	<meta name="og:locality" content="São Paulo">
	<meta name="og:region" content="SP">
	<meta name="og:country-name" content="BR">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://djament.com.br/estudos/poo-interfaces/assets/img/controle-remoto.png">
	<meta property="og:image:alt" content="POO | Interfaces">
	<meta property="og:image:url" content="https://djament.com.br/estudos/poo-interfaces/assets/img/logo-dh.png">
	<meta property="og:image:type" content="img/png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Biblioteca Teste">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" sizes="60x60" href="https://djament.com.br/estudos/poo-interfaces/assets/img/logo-dh.png">
	<link rel="icon" type="image/png" sizes="60x60" href="https://djament.com.br/estudos/poo-interfaces/assets/img/logo-dh.png">	
	<link rel="canonical" href="https://djament.com.br/estudos/poo-polimorfismo">
	<meta name="keywords" content="php, poo, orientação à objetos, programação orientada à objetos, desenvolvimento web">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="container">
		<section class="row">
			<article class="col-12">
				<div id="logo3D" class="desktop-only col-12"><a id="cube" href="https://br.digitalhouse.com" title="Digital House Brasil" alt="Digital House Brasil" rel="external" target="_blank">
					<img src="assets/img/logo-dh.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House"></a>
				</div>
			</article>
			<article class="col-12">
				<h1>Interfaces <a href="https://github.com/Marcelo-Diament/poo-interfaces" target="_blank" title="Acesse o repositório para ver os códigos em PHP" rel="noreferrer"><i class="fab fa-github"></i></a></h1>
			</article>
		</section>
	</header>
	<main class="container">
		<section class="row">

			<!-- ### OBJETO DA CLASSE CONTROLE REMOTO ### -->
			<!-- A classe implementa a interface controlador, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/controle-remoto.png" alt="Classe Controle Remoto">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe ControleRemoto</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe ControleRemoto implementa a Interface Controlador</h6>
					</div>
					<div class="card-header">
						<p data-toggle="collapse" href="#metodosControleRemoto" role="button" aria-expanded="false" aria-controls="metodosControleRemoto" onclick="colapsar(this)">Métodos Aplicados ao Objeto <span class="setaCollapse">+</span></p>
					</div>
					<ul class="list-group list-group-flush collapse" id="metodosControleRemoto">
						<?php
						// Instanciando um objeto a partir da classe Mamífero.
						$controleRemoto = new ControleRemoto();
						$controleRemoto->ligar();
						$controleRemoto->ligar();
						$controleRemoto->desligar();
						$controleRemoto->desligar();
						$controleRemoto->aumentarVolume();
						$controleRemoto->ligar();
						$controleRemoto->aumentarVolume();
						$controleRemoto->aumentarVolume();
						$controleRemoto->aumentarVolume();
						$controleRemoto->aumentarVolume();
						$controleRemoto->aumentarVolume();
						$controleRemoto->aumentarVolume();
						$controleRemoto->ativarMudo();
						$controleRemoto->diminuirVolume();
						$controleRemoto->desativarMudo();
						$controleRemoto->diminuirVolume();
						$controleRemoto->desativarMudo();
						$controleRemoto->diminuirVolume();
						$controleRemoto->desligar();
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE CONTROLE REMOTO ### -->

			<!-- ### OBJETO DA CLASSE CONTA ### -->
			<!-- A classe implementa a interface controladorbancario, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/conta-bancaria.png" alt="Classe Conta">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe ContaBancaria</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Conta implementa a Interface Controlador Bancário</h6>
					</div>
					<div class="card-header">
						<p data-toggle="collapse" href="#metodosContaBancaria" role="button" aria-expanded="false" aria-controls="metodosContaBancaria" onclick="colapsar(this)">Métodos Aplicados ao Objeto <span class="setaCollapse">+</span></p>
					</div>
					<ul class="list-group list-group-flush collapse" id="metodosContaBancaria">
						<?php
						// Instanciando um objeto a partir da classe Mamífero.
						$correntista = new ContaBancaria();
						$correntista->sacar();
						$correntista->verSituacao();
						$correntista->abrirConta();
						$correntista->verSituacao();
						$correntista->verSaldo();
						$correntista->sacar();
						$correntista->depositar();
						$correntista->depositar();
						$correntista->verSaldo();
						$correntista->sacar();
						$correntista->depositar();
						$correntista->abrirConta();
						$correntista->sacar();
						$correntista->setSaldo(500);
						echo "<li class='list-group-item'>\$correntista->setSaldo(500)<br>Saldo aumentado em R$ 500,00, agora está em R$ ".$correntista->getSaldo().",00</li>";
						$correntista->verSaldo();
						$correntista->setSaldo(0);
						echo "<li class='list-group-item'>\$correntista->setSaldo(0)<br>Saldo reduzido em R$ 500,00, agora está em R$ ".$correntista->getSaldo().",00</li>";
						$correntista->verSaldo();
						$correntista->fecharConta();
						$correntista->fecharConta();
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE CONTA ### -->


		</section>
	</main>
	<footer></footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		window.onload = function(){
			colapsar = function(el){
				(el.firstElementChild.innerHTML == '+') ? el.firstElementChild.innerHTML = '-' : el.firstElementChild.innerHTML = '+'
			}
			$('article').after('<hr/>')
		}
	</script>

</body>

</html>