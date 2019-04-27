<!DOCTYPE HTML>
<html lang=”pt-br”>
	
	<head>
		<meta charset=”UTF-8”>
		<link rel="stylesheet" type="text/css" href="css/concluido.css">
		<title>	</title>
	</head>
	
	<body>
		<div class="result">
			
			<?php  


			session_start();

			if($_SESSION['logou'] == 1) {
				include "menu.html";

				$servidor = mysqli_connect("localhost", "root","","infopecas");

				$peca = $_POST['peca'];
				$valor = $_POST['valor'];

				$cadastrou = mysqli_query($servidor, "insert into pecas (pecas, valor) values ('$peca','$valor')");

				if($cadastrou) {
					echo "<p>Cadastro realizado com sucesso </br></p>";

				} else {
					echo "Deu merda!";

				}

			} else {

				header('Location: index.html');
			}
		?>
		</div>
	
	</body>

</html>


























