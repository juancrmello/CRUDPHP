<?php

	session_start();


	if($_SESSION['logou'] == 1){

		$id = $_POST['id'];
		$peca = $_POST['peca'];
		$valor = $_POST['valor'];

		$servidor = mysqli_connect("localhost","root","","infopecas");

		mysqli_query($servidor, "update pecas set peca ='$peca', valor ='$valor' where id = $id");

		header('Location: lista.php');
	} else {

		header('Location: index.html');

	}
























?>