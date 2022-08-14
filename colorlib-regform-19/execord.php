<?php 

			
			$date=$_POST['date'];
			$inscrip=$_POST['inscrip'];
			$diag=$_POST['diag'];
			$vib=$_POST['matricule'];


			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO ordonnance(diagnostic,date_ord,desc_ord,matriculep) VALUES(:diag, :dates, :inscrip, :matricule)");
				$vibe->bindParam(':diag',$diag);
				$vibe->bindParam(':dates',$date);
				$vibe->bindParam(':inscrip',$inscrip);
				$vibe->bindParam(':matricule',$vib);
				$vibe->execute();

				header("location:../inner-page.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}




 ?>