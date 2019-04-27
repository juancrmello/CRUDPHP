<!DOCTYPE HTML>
<html lang=”pt-br”>
	
	<head>
		<meta charset=”UTF-8”>
		<link rel="stylesheet" type="text/css" href="css/lista.css">
		<title>	</title>
	</head>
	
	<body>
	

	<div class="box">	
		<h1>Lista de Peças</h1>

		<?php

		session_start();

			if ($_SESSION['logou'] == 1) {
				

				$servidor = mysqli_connect("localhost","root","","infopecas");

				$infopecas = mysqli_query($servidor, "select * from pecas");

				while($pecas = mysqli_fetch_array($infopecas)){

					echo "<p>".$pecas['pecas']. " - R$ ".$pecas['valor']. " | <a href='excluir.php?id=".$pecas['id']."'>Excluir</a>" . " | <a href='editar.php?id=".$pecas['id']."'>Editar</a>"."</p>";
				}
				
			} else {
				header('Location: index.html');
			}

?>
		<a href="menu.html">Voltar</a>

	</div>
	</body>

</html>
