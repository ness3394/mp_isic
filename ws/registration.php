<?php 

  require 'db.php'; 

		$password = $_GET["password"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];	
		$email = $_GET["email"];
		$req = $bdd->exec("INSERT INTO user (`id`,`name`, `prenom`,`password`,`mail`) VALUES ('','$nom', '$prenom','$password', '$email')");
		if ($req) {
			echo '{"rep" : "true"}';
		} else {
			echo '{"rep" : "false"}';
		}
 
                
	
