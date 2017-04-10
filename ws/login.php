<?php 

  require 'db.php'; 

		$mail = $_GET["mail"];
		$password = $_GET['password'];

		$req = $bdd->query("SELECT * FROM user WHERE mail LIKE '$mail' AND password LIKE '$password'");
		$count = $req->rowCount();
//echo $mail; echo $password ; echo $count;
		if ($count == 1) {

			echo '{"rep" : "true"}';
		} else {
			echo '{"rep" : "false"}';
		}
 
	
