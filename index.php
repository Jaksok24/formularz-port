<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "port";

	try {
		$dsn = "mysql:host=$host;dbname=$db;charset=utf8";
	
		$pdo = new PDO($dsn, $user, $pass);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		echo "";
	} catch (PDOException $e) {
		echo "Błąd połączenia: " . $e->getMessage();
	}

	// $mysqli = mysqli_connect($host, $user, $pass, $db);

	// if($mysqli){
	// 	echo "Połączenie udane";
	// } 
	// else {
	// 	echo "Błąd";
	// }
	
	if(isset($_POST["imie"]) and isset($_POST["mail"]) and isset($_POST["tel"]) and isset($_POST["data"]) and isset($_POST["godz"]) and isset($_POST["rejs"]) and isset($_POST["lo"]) and isset($_POST["catering"])){

		$name = $_POST["imie"];
		$mail = $_POST["mail"];
		$tel = $_POST["tel"];
		$data = $_POST["data"];
		$godz = $_POST["godz"];
		$rejs = $_POST["rejs"];
		$osoby = $_POST["lo"];
		$catering = $_POST["catering"];
		
		$stmt = $pdo->prepare('INSERT INTO klient (name, email, nr_tel, day, hour, cruise, people, catering) VALUES ("'.$name.'", "'.$mail.'", "'.$tel.'", "'.$data.'", "'.$godz.'", "'.$rejs.'", "'.$osoby.'", "'.$catering.'")');
		
		$result = $stmt->execute();

		if($result !== false){
			echo "<br><h2 style='text-align: center; margin: auto; background-color: #333333; color: white; width: 40rem; height: 2rem;'>Dane wpisane pomyślnie</h2>";
		} else {
			echo "Wystąpił błąd!";
		}
	
	} else{
		// echo "<h2 style='text-align: center; margin: auto; background-color: #333333; color: white; width: 40rem; height: 2rem;'>Wprowadź dane</h2>";
		echo "";
	}

	$pdo = null;
?>
