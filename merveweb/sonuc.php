<?php
	if(isset($_POST["kayit"])){
		echo "ADINIZ: ". $_POST["isim"] ."<br>";
        echo "ŞİFRENİZ: ". $_POST["sifre"] . "<br>";
		echo "TELEFON NUMARANIZ: ". $_POST["tel"]  . "<br>";
		echo "OKULUNUZ :";
		foreach($_POST["diller"] as $dil){
			echo $dil." ";
		}
		echo "<br> ";

	}
?>