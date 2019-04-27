<?php

	session_start();

	if($_SESSION['logou'] == 1){
		

		$servidor = mysqli_connect("localhost","root","","infopecas");

		$resultado = mysqli_query($servidor, "select * from pecas");

		$html = "";
		

		while($peca = mysqli_fetch_assoc($resultado)){
			$html .= "ID :   ".$peca['id'] . "<br>";
			$html .= "Peça:   ".$peca['pecas'] . "<br>";
			$html .= "Valor:   ".$peca['valor'] ." reais <hr>";		
	}

	}else {
		header('Location: index.hmtl');
	}

	//referenciar o DomPDF com namespace
		use Dompdf\Dompdf;

	// include autoloader
		require("dompdf/autoload.inc.php");


	//Criando a Instancia
		$dompdf = new DOMPDF();
		
	// Carrega seu HTML
		$dompdf->load_html('
				<h1 style="text-align: center;">RELATORIO INFOPEÇAS</h1>
				'. $html .'
			');

		ob_clean();
	//Renderizar o html
		$dompdf->render();

	//Exibibir a página
		$dompdf->stream(
			"relatorio_infopecas", 
			array(
				"Attachment" => false //Para realizar o download somente alterar para true
			)
		);

?>