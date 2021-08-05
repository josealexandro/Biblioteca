<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "biblioteca";

	if ( $conn = mysqli_connect($server, $user, $pass, $bd)) {
		
	} else 
		echo "Erro";

	function mostra_data($data) {
		$d = explode('-', $data);
		$escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
		return $escrve;
	}
 ?>