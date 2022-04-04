<!DOCTYPE html>
<html lang="pt-br">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
	<link rel='shortcut icon' href='imagens/logo/favicon.ico' type='image/x-icon'>
	<title>Karina Vieira Nails</title>
	<style>
		#tit{			
			font-family:'Cinzel Decorative', cursive;
			font-size:40pt;
		}
		
		#contCurso{
			font-family:'Roboto Mono', monospace;
			color:black;
			font-size:20pt;
			margin-right:50px;
		}
		.descricao{
			text-align:justify;
		}
		#navegar{
			font-size:15pt;
			margin-top: 20px;
			margin-left: 100px;
			margin-top: 50px;
			background: pink;
		}
		body{
			background-color: #ccb9bc;
			font-family:'Roboto Mono', monospace;
			color:black;
			font-size:20pt;
			
			}
		#qmsomos{
			text-align: left;
		}
				
	</style>
	<title>Olá, mundo!</title>	
  </head>
  <body>  
		<header id='cabecalho'class="container-fluid border border-dark col-sm-11 col-lg-11">
			<h1 id='tit'>
				<img class="img-fluid " src="imagens/logo/logo_preta_redmi200pink.jpeg" alt="Imagem responsiva">
				<strong>Karina Vieira Nails Designer</strong>
			</h1>
		</header><br>
		<nav id='navegar' class="navbar navbar-expand-lg navbar-light bg-light col-10">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item"><a class="nav-link" href="atividade_final.html">INÍCIO</a><span class="sr-only">(Página atual)</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pgcursos.html" rel='next'>Curso</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="procedimentos.html">Procedimentos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="equipe.html">Equipe</a>			
					<li class="nav-item">			
						<a class="nav-link" href="#">Galeria de Fotos</a>
					</li>
				</ul>
				<a id='agendar' class="navbar-brand" href="https://contate.me/KarinaVieira">Agendar Horário!</a>
			</div>
		</nav><br>
	<div class="card mb-3 col-6">
	  <img class="card-img-top col-6" src="imagens/pessoal/foto001_400.jpeg" alt="Imagem de capa do card">
	  <div class="card-body">
		<h5 class="card-title">Karina Vieira</h5>
		<p class="card-text">Tenho 26 anos de idade, 10 anos de experiência na profissão e apaixonada por empoderar mulheres</p>
		<p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
	  </div>
	</div>
	<script>
		var nav = window.document.getElementById('cabecalho')
			nav.style.background = '#ffc1e3'
		var nav = window.document.getElementById('cabecalho')
		nav.style.background = '#ffc1e3'
		var agendar = window.document.getElementById('agendar')
		var saiu = window.document.getElementById('agendar')
		agendar.addEventListener('mouseenter',agendeentrou)
		agendar.addEventListener('mouseout',agendesaiu)
		function agendeentrou(){
			agendar.style.background = '#e91e63'
			agendar.innerText = 'Estamos Prontas para te Atender...'
			
		}
		function agendesaiu(){
			agendar.style.background = 'white'
			agendar.innerText = 'Agende Seu horário'
		}
	</script>

    <script src='script_teste.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>