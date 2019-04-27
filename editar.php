<!DOCTYPE HTML>
<html lang=”pt-br”>
	
	<head>
		<meta charset=”UTF-8”>
		<link rel="stylesheet" type="text/css" href="css/editar.css">
		<title>	</title>
	</head>
	
	<body>
		
	<div class="box">	
		

		<?php

			session_start();

			if($_SESSION['logou'] == 1) {
				$id= $_GET['id'];

				$servidor = mysqli_connect("localhost","root","","infopecas");

				$pecas = mysqli_query($servidor, "select * from pecas where id= $id");

				while($peca = mysqli_fetch_array($pecas)) {
					echo " <h1>INFOPEÇAS</h1>
				<form action='checaEdicao.php' method='post'>
					<input type='hidden' name='id' value='".$peca['id']."'> 
					<input type='text' name='peca' value='".$peca['peca']."'><br>
					<input type='number' name='valor' value='".$peca['valor']."'><br>
					<br><input type='submit' value='Editar Peça'><br>
				</form>
				";
				} 

			} else {
				header('Location: index.html');
			}

		?>
	</div>
	</body>

</html>