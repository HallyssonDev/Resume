<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.hls-tecnologies .hls-tec{
		display: table;
		
	}

	.hls-tecnologies{
		position: relative;
		margin: 40px;
		margin-left: 20px;
		animation: thisout 7s infinite;
	}

	@keyframes thisout{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(10px);
		}
		100%{
			transform: translateY(0px);
		}
	}

</style>
<body>
	<section class="main-content">
		<h2><i class="right angle icon"></i>Um pouco sobre</h2>
		<p>Estou sempre buscando o aperfeiçoamento profissional e pessoal.</p>
		<p>Logo abaixo são algumas tecnologias que gosto de utilizar:</p>
	</section>

	<table>
		<th>
			<div class="hls-tecnologies">
				<div class="hls-tec">
					<img src="pages/aboutme/imgs/html.png">
				</div>
			</div>
		</th>
		<th>
			<div class="hls-tecnologies">
				<div class="hls-tec">
					<img src="pages/aboutme/imgs/javascript.png">
				</div>
			</div>
		</th>
		<th>
			<div class="hls-tecnologies">
				<div class="hls-tec">
					<img src="pages/aboutme/imgs/php.png">
				</div>
			</div>
		</th>
		<tr>
			<td>
				<div class="hls-tecnologies">
					<div class="hls-tec">
						<img src="pages/aboutme/imgs/database.png">
					</div>
				</div>
			</td>
			<td>
				<div class="hls-tecnologies">
					<div class="hls-tec">
						<img src="pages/aboutme/imgs/python.png">
					</div>
				</div>
			</td>
			<td>
				<div class="hls-tecnologies">
					<div class="hls-tec">
						<img style="background-color: white" src="pages/aboutme/imgs/git.png">
					</div>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>