<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.hls-tecnologies .hls-tec{
		display: table;
		
	}
	.hls-tecnologies:hover{
		animation: thisout 2s ease;
	}

	.hls-tecnologies{
		margin: 40px;
		margin-left: 20px;
		animation: popup 7s infinite;
		animation-timing-function: ease;
		
	}
	table{
		position: relative;
		left: calc(100% - 95%);
	}

	@keyframes thisout{
		0%{
			cursor: pointer;
			transform: translateY(0px);
		}
		50%{
			cursor: pointer;
			transform: translateY(-10px);
		}
		100%{
			cursor: pointer;
			transform: translateY(0px);
		}
	}


	@keyframes popup{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(-10px);
		}
		100%{
			transform: translateY(0px);
		}

	</style>
	<body>
		<section class="main-content">
			<h2><i class="right angle icon"></i>Sobre mim</h2>
			<p>Programo por diversão e aprendizado.</p>
			<p>Logo abaixo são algumas tecnologias que gosto de utilizar</p>
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