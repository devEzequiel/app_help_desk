<?php
	
	//script para fazer logout 
	session_start();
	session_destroy();
	header("Location: ../index.php")

?>