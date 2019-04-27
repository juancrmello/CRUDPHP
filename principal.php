<?php

	session_start();

	if($_SESSION['logou'] == 1){
		include ("menu.html");

	} else {
		header('Location: index.hmtl');

	}



















?>