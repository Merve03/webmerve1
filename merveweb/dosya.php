<?php
	if($_POST['girdi']){ // Eğer girdi adında bir POST varsa
		$degisken = $_POST["girdi"]; // POST'u değişkene aktar
		echo $degisken; // değişken değerini ekrana yazdır
	}
?>