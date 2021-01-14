<?php
	
	require_once "connect.php";

	// script para deletar chamados

	$id = $_GET ['link'];

	echo "$id<br>";


	$test = "DELETE FROM `cham` WHERE id = $id";

	echo "$test";

	$exe = mysqli_query ($conn, $test);

	$close = DBClose ($conn);

	if ($close){
		header ("Location: ../consultar_chamado.php?reg=apagado");
	}



?>