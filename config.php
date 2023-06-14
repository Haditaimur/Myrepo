<?php


        $servername = "server188.web-hosting.com";
		$username = "athexdjb_admin";
		$password = "Sussex114!";
		$charset = 'utf8mb4';
		$dsn = "mysql:host=$servername;dbname=athexdjb_reservations;charset=$charset";

		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];
		
		try {
		  $pdo = new PDO($dsn, $username, $password, $options);
		
		} catch(PDOException $e) {
		 	 echo "Connection failed: " . $e->getMessage();
		}

?>

