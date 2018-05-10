<!DOCTYPE html>
<html>
<head>
	<!-- CSS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- JavaScrip -->
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/popover.js"></script>

</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-dark" >
		<div class="dropdown">
			<span class="fas fa-bars" data-placement="bottom" data-trigger="hover"></span>
			<div class="dropdown-content">
				<a href="/index">Cadastrar Time</a>
				<a href="#">Cadastrar Atleta</a>
				<a href="/index">Cadastrar Profissional</a>
				<a href="#">Cadastrar Campeonato</a>
			</div>
		</div>
		<a href="/index" class="logo"><img src="/images/logo.png"></a>
	</nav>
	@yield('conteudo')
	<!--<footer>
		COPYRIGHT 2018. ALL RIGHTS RESERVED
		GERENCIADOR DE CLUBE ESPORTIVO. MABE BY CHADY.
	</footer>-->
</body>
</html>