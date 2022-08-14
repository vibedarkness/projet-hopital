<?php 

			
			$vib=$_POST['maladie'];


			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO maladie(nom_mal) VALUES(:nom)");
				$vibe->bindParam(':nom',$vib);
				$vibe->execute();

				header("location:formrap.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}




 ?>