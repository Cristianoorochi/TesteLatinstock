<!DOCTYPE html>
<html>
<head>
	<title>Guaranastock Marketplace - trabalhe conosco</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="icon" href="imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<style type="text/css">

		.upload {
			color: #444;

		}
		.upload a {
			background-color: #3075e4;
			text-decoration: none;
			padding: 10px 20px;
			margin-top: 20px;
			color: #fff;
		}
		footer {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<header>
		<img class="logo" src="imagens/Logo-GuaranaStock.png" alt="Logo Guarana Stock">
	</header>
	<div class="container upload">
		<?php
			$nome_temporario=$_FILES["arquivo"]["tmp_name"];
			$nome_real=$_FILES["arquivo"]["name"];
			copy($nome_temporario,"upload/$nome_real");
			echo "</br>";
			echo "Cadastro efetuado com sucesso, entraremos em contato em breve." . "</br></br>"."<a href='index.html'>Voltar</a>";
		?>
	
	</div>
	<footer>
		<div class="container footer-align">
			<ul class="footer-col1">
				<li><span>Guaranastock.com</span></li></br>
				<li><a href="http://www.guaranastock.com">Pagina Principal</a></li>
	            <li><a href="http://www.guaranastock.com/home/About">Sobre</a></li>
	            <li><a href="http://www.guaranastock.com/home/ContactUs">Contato</a></li>
	            <li><a href="http://www.guaranastock.com/home/Subscribe">Planos e preços</a></li>
	        </ul>
	        <ul class="footer-col2">
	            <li><span>Marketplace</span></li></br>
	            <li><a href="http://www.guaranastock.com/Contributor">Venda suas fotos</a></li>
	        </ul>
	        <ul class="footer-col3">
	        	<li><span>Conta</span></li></br>
	        	<li><a href="http://www.guaranastock.com/Usuario/LoginRegister">Entrar/Cadastrar-se</a></li>
	            <li><a href="http://www.guaranastock.com/Usuario/Profile">Minha conta</a></li>
	        </ul>
	        <ul class="footer-col4">
	        	<li><span>Midias sociais</span></li></br>
	            <li><a href="https://www.facebook.com/Guaranastockcom-1197360770370294/"><img src="imagens/facebook.png"></a><a href="https://www.instagram.com/guaranastock/?hl=pt-br"><img src="imagens/instagram.png"></a> <a href="https://twitter.com/guaranastock"><img src="imagens/twitter.png"></a></li>
	        </ul>
        </div>

	</footer>
</body>
</html>