<?php
	
	define('ENVIRONMENT', 'localhost');
	//define('ENVIRONMENT', 'production');
	
	//script para coneectar ao banco de dados
	if (ENVIRONMENT === 'localhost'){

		define('host', 'localhost');
		define('username', 'root');
		define('pwd', null);
		define('dbname', 'help');

	} else if (ENVIRONMENT === 'production'){ 

		define('host', '');
		define('username', '');
		define('pwd', '');
		define('dbname', '');

	}

	$conn = mysqli_connect(host, username, pwd, dbname);

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		exit();
	}


	function DBClose ($conn){
		$close = mysqli_close ($conn);
		return $close;
	}
	

?>