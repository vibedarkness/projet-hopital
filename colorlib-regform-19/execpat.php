<?php 

			
			$des=$_POST['prenom'];
			$ref=$_POST['nom'];
			$qt=$_POST['adresse'];
			$pu=$_POST['telephone'];
			$desc=$_POST['age'];
			$sexe=$_POST['sexe'];

			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO patient(prenom,nom,adresse,numtel,age,sexep) VALUES(:prenom, :nom, :adresse, :numtel, :age, :sexe)");
				$vibe->bindParam(':prenom',$des);
				$vibe->bindParam(':nom',$ref);
				$vibe->bindParam(':adresse',$qt);
				$vibe->bindParam(':numtel',$pu);
				$vibe->bindParam(':age',$desc);
				$vibe->bindParam(':sexe',$sexe);
				$vibe->execute();

				header("location:../inner-page.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}


 ?>