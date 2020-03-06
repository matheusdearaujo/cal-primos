<!DOCTYPE html>
<html lang="pr-br">
<head>
    <title>Calculador de Primos</title>
	<meta charset="UTF-8">
	<meta name="author" content="Matheus Araujo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="icon/logo.png">
   <style>
		.conteudo {
			border: 8px solid white;
			box-shadow: 1px 1px 4px black; 
			width: 50%;
			margin: auto;
		}
		a {
			font-size: 14px;
			color: black;
		}
		.paragrafo {
			font-size: 20px;
			text-align: center;
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
			background-color:black;
			color: white;
		}
		.volta {
			position: relative;
			top: 50px;
		}
  </style>
</head>

<body style="background-color: whitesmoke;">
	<br>
	<br>
	<br>
	<br>
	<p class="paragrafo">CALCULADORA DE NÚMEROS PRIMOS. VEJA SE UM NÚMERO É PRIMO OU NÃO.</p>
	<br>
<header class="conteudo">   
 
    <div style="background-color: black;">
        <h1 style="color: white; text-align: center;">NÚMERO PRIMO</h1>
	</div>
    
	<div style="text-align: center;">
		<?php
			$n = $_GET['n'];
			$conta = 0;
			
			for($result = 2; $result < $n; $result++)
				if ($n % $result == 0) {
					$conta = $conta + 1;
			}
			if ($conta)
				{echo "<b> O NÚMERO $n NÃO É PRIMO </b>";}
			else
				 {echo "<b> O NÚMERO $n É PRIMO </b>";}
		?>
		<br>
		<a class="volta" href="primos.html">Voltar</a>		
    </div>
    <br>
    <br>
    <br>
</header>
<br>
<div style="text-align: center;">
	<a href="https://www.todamateria.com.br/numeros-primos/" target="_blank">Não sabe o que são números primos?</a>
</div>
</body>
</html>
