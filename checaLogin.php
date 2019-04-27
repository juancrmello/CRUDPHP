<?php

		session_start();

		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$servidor = mysqli_connect("localhost","root","","infopecas");

		$resultado = mysqli_query($servidor,"select * from usuarios where login='$login' and senha='$senha'");

		$numlinhas = mysqli_num_rows($resultado);

		if($numlinhas != 0) {
			$_SESSION['logou'] = 1;
			header ('Location: principal.php');
		} else {
			$_SESSION['logou'] = 0;
			header('Location: index.html');
			}
?>