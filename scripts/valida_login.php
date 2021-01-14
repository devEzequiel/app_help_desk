<?php
	
	//script para receber os dados necessário para as regras de negócio do sistema


	include_once "../database/connect.php";
	session_start();


	$email = mysqli_real_escape_string ($conn, $_POST['email']);
	$senha = mysqli_real_escape_string ($conn, $_POST['senha']);

	
	//Verifica se o usuário existe no banco de dados

	$query = "SELECT * FROM `usuarios` WHERE  email = '$email' AND senha =  '$senha'";
	$execute = mysqli_query ($conn, $query);
	$row = mysqli_num_rows ($execute);


	//recupera o id

	$id = mysqli_fetch_array ($execute, MYSQLI_ASSOC);

	//autenticação do usuário

	if ($row > 0){

		$_SESSION['autenticado'] = 'sim';
		$_SESSION['id'] = $id['id'];
		$_SESSION['perfil'] = $id['perfil_id'];
		header("Location: ../home.php");

	} else {

		$_SESSION['autenticado'] = 'nao';
		header("Location: ../index.php?login=error");
		
	}



	$close = DBClose ($conn);


?>