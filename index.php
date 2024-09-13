<?php
  if(isset($_POST["imie"]) and isset($_POST["mail"]) and isset($_POST["tel"]) and isset($_POST["data"]) and isset($_POST["godz"]) and isset($_POST["rejs"]) and isset($_POST["lo"]) and isset($_POST["catering"])){
    
    $name = $_POST["imie"];
		$mail = $_POST["mail"];
		$tel = $_POST["tel"];
		$data = $_POST["data"];
		$godz = $_POST["godz"];
		$rejs = $_POST["rejs"];
		$osoby = $_POST["lo"];
		$catering = $_POST["catering"];
			
		echo "<h2 style='text-align: center; margin: auto; background-color: #333333; color: white; width: 40rem; height: 2rem;'>Dane wpisane pomyślnie</h2>";
			
	}
	else{
	  echo "<h2 style='text-align: center; margin: auto; background-color: #333333; color: white; width: 40rem; height: 2rem;'>Wprowadź dane</h2>";
	}
?>
