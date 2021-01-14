<?php
	
	session_start();
	require "connect.php";

	$nome = mysqli_real_escape_string ($conn, $_POST['nome']);
	$valor = mysqli_real_escape_string ($conn, $_POST['valor']);
	$coment = mysqli_real_escape_string ($conn, $_POST['comentarios']);
	$id = mysqli_real_escape_string ($conn, $_SESSION['id']);


	//adiciona um chamado ao um banco de dados 

	$query = "INSERT INTO `cham` (id_u, nome, valor, comentarios) VALUES ('$id', '$nome', '$valor', '$coment')";

	$exe = mysqli_query ($conn, $query);

	$row = @mysqli_num_rows ($exe);

	//encerrando conexão com o bd
	$close = DBClose ($conn);

	header("Location: ../chamado.php")

?>