<?php 
require 'Classes/EmailMessage.php';
if (isset($_POST['btn'])) {
	(new EmailMessage())->sendEmailTohls();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hallysson Ribeiro Alexandre</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main-style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
<link rel="stylesheet" type="text/css" href="pages/projects/css/project_style.css">
<link rel="icon" href="imgs/profile.png">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/input.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/button.min.css">

<body>
	<header class="hlsparallax">
		<h1 class="neon" data-text="Hallysson Ribeiro Alexandre">Hallysson Ribeiro Alexandre</h1>
	</header>

	<button class="hlsbtn">
		<i class="ui right angle icon"></i>
	</button>

	<div id="sidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" id="closeicon">&times;</a>
		<a id="principal"><i class="user icon"></i>Principal</a>
		<a id="projects"><i class="folder icon"></i>Projetos</a>
		<a id="aboutme"><i class="certificate icon"></i>Sobre</a>
	</div>

	<section class="main-content">
		<div id="newcontent">
			<h2><i class="right angle icon"></i>Olá, Este é o meu portifólio</h2>
			<p>
				Clicando no ícone de <i class="right angle icon" style="color: white; border-style: hidden; border-width: 2px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; padding: 5px; background-color:#9932CC "></i>, você irá navegar no meu portifólio com algumas informações sobre mim.
			</p>
			<p>
				Algumas informações aqui foram apenas melhorada de meu portifólio em .pdf
				que você pode encontra-lo clicando <a href="portifolio/resume.pdf" download="hls-portifolio" style="text-decoration: none; color: lightblue">aqui.</a> 
				<br>
				<br>
				Então digamos que está página foi para mostrar algumas habilidades que tenho com tecnologias que venho aprimorando e uma extensão do arquivo .pdf
			</p>
			<p>
				Em qualquer momento, você pode entrar em contato comigo via email...
				Você encontra essa opção no final da página onde irá preencher alguns campos.

			</p>
		</div>
	</section>

	<form class="contactme" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
		<i class="angle big up icon" style="margin-top:-60px;  color: white;  margin-left: 125px;"></i>
		<div>
			<label style="font-family: 'Verdana'; font-size: 13.5px;" >Nome:</label>
			<div class="ui input">
				<input type="text" autocomplete="off" name="strangename" placeholder="Seu Nome...">
			</div>
		</div>
		<div>
			<label  style="font-family: 'Verdana'; font-size: 13.5px;" >Email:</label>
			<div class="ui input">
				<input type="text" autocomplete="off" name="strangemail" placeholder="Seu Email">
			</div>
		</div>
		<div>
			<label style="font-family: 'Verdana'; font-size: 13.5px;" >Tema:</label>
			<div class="ui input">
				<input type="text" autocomplete="off" name="strangesubject" placeholder="Tema">
			</div>
		</div>
		<div>
			<textarea placeholder="Digite sua mensagem aqui" style="font-family: 'Verdana' font-size:13.5px; height: 100px; width: 100%;color: #000000; border-color: grey; opacity: 0.3" name="strangemsg"></textarea>
		</div>
		<button class="ui black button" name="btn"><i class="paper plane icon"></i>Enviar</button>
	</form>

	<footer class="footer">
		<div class="footer-content">
			<div>
				<a style="text-decoration: none; font-family: 'Verdana'; color: white;"  target="_blank" href="https://github.com/HallyssonDev"><i class="github icon"></i>GitHub</a>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/modal.min.js"></script>
	<script type="text/javascript" src="js/main-script.js"></script>
</body>
</html>