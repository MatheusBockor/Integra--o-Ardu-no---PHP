<html>	
	<head>
		<title>Controle Persianas e Luminosidade</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body  bgcolor="#d3d3d3">
<div class="total">

	<header>
	<div id="banner">
		<h1 class="titulo"> Projeto PAC Controle Persiana e Luminosidade </h1>
		</div>
	</header>
	
	
	<div class="controle">
		<h1 class="h1"> Controle Persiana</h1>
		<table>
		<tr><td>
		<a href="?GPMOTORON"> 
				<?php/*

				$conexaoArduino = fopen ("COM5", "w");

				fwrite($conexaoArduino, $_REQUEST);
				fclose ($conexaoArduino);*/
				?>
		<img src="https://www.persianasnoronha.com.br/img/modelos/rolo.png" class="imagem"><br>
		<button class="botao">Abrir Persiana</button><br>
		</a>
		<td>
		<a href="?GPMOTOROFF"> 
				<?php/*

				$conexaoArduino = fopen ("COM5", "w");

				fwrite($conexaoArduino, $_REQUEST);
				fclose ($conexaoArduino);*/
				?>
		<img src="https://www.persianasnoronha.com.br/img/modelos/horizontal.png" class="imagem"><br>
		<button class="botao">Fechar Persiana</button><br>
		</a>
		</table>
		</div>
		
		<hr style="width:30%; margin-left:10%">
		
		<div class="controle">
			<h1 class="h1"> Controle Manual Da Iluminacao </h1>
			<table width="300px" height="300px">
			<tr><td>
			<a href="?GPRELEON"> 
					<?php/*

					$conexaoArduino = fopen ("COM5", "w");

					fwrite($conexaoArduino, $_REQUEST);
					fclose ($conexaoArduino);*/
					?>
			<img src="https://www.pikpng.com/pngl/b/484-4842531_desenho-de-lampada-png-di-lampadina-da-colorare.png" class="imagem"><br><br>
			<button class="botao">Ligar Lampada</button><br>
			</a>
			<td>
			<a name="iluminacao"></a>
			<a href="?GPRELEOFF"> 
					<?php/*

					$conexaoArduino = fopen ("COM5", "w");

					fwrite($conexaoArduino, $_REQUEST);
					fclose ($conexaoArduino);
					*/
					?>
			<img src="https://image.flaticon.com/icons/png/512/18/18310.png" class="imagem"><br><br>
			<button class="botao">Desligar Lampada</button><br>
			</a>
			</table>
		</div>
		
		<div class="controle2">
			<h1 class="h1"> Personalizacao Da Iluminacao </h1>
			
			<a href="?LEITURAON"> 
					<?php/*

					$conexaoArduino = fopen ("COM5", "w");

					fwrite($conexaoArduino, $_REQUEST);
					fclose ($conexaoArduino);*/
					?>
			<img src ="https://image.flaticon.com/icons/png/512/43/43455.png" class="imagem"><br><br>
			<button class="botao">Modo Leitura</button><br><br>
			</a>
			<hr class="hr">
			<a href="?ECOON"> 
					<?php/*

					$conexaoArduino = fopen ("COM5", "w");

					fwrite($conexaoArduino, $_REQUEST);
					fclose ($conexaoArduino);
					*/
					?>
			<img src ="https://image.flaticon.com/icons/png/512/69/69881.png" class="imagem"><br><br>
			<button class="botao">Modo Economia</button><br><br>
			</a>
			<hr class="hr">
			<a href="?DECORAON"> 
					<?php

					/*$conexaoArduino = fopen ("COM5", "w");

					fwrite($conexaoArduino, $_REQUEST);
					fclose ($conexaoArduino);*/
					?>
			<img src ="https://image.flaticon.com/icons/png/512/87/87652.png" class="imagem"><br><br>
			<button class="botao">Modo Decorativo</button><br>
			</a>
		</div>
		<div id="footer">	
		<div id="footer_content">
		Copyright @ 2020 | CHRISTIAN WENDLAND | CRYSTIAN DAVID | MARCOS GONCALVES | MATHEUS BOCKOR 
		</div>
		</div>
</div>



