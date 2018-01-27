<?php

	// database credentials and general sql functions will be kept here
	// database credentials omitted for git
	define("DB_SERVER", "localhost");
	define("DB_USER", "");
	define("DB_PASS", "");
	define("DB_NAME", "");
	
	function db_connect() {
		
		$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		
		if(mysqli_connect_errno()) {
			
			$msg = "Database connection failed: ";
			$msg .= mysqli_connect_error();
			$msg .= " (" . mysqli_connect_errno() . ")";
			exit($msg);
			
		}
		
		return $connection;
	
	}

	function db_close($connection) {
		return mysqli_close($connection);
	}

	
  
?>
