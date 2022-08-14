<?php 

			
			$dat=$_POST['nom'];
			$desc=$_POST['quantite'];
			$prix=$_POST['prix'];

			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO pharmacie(nom_medic,quantite,prix) VALUES(:nom, :quantite, :prix)");
				$vibe->bindParam(':nom',$dat);
				$vibe->bindParam(':quantite',$desc);
				$vibe->bindParam(':prix',$prix);
				$vibe->execute();

				header("location:../pharmacie.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}


 ?>