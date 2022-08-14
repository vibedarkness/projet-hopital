<?php 

			
			$pre=$_POST['prenom'];
			$no=$_POST['nom'];
			$adr=$_POST['adresse'];
			$tel=$_POST['telephone'];
			$age=$_POST['age'];
			$cni=$_POST['cni'];
			$fonc=$_POST['fonction'];

			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO employe(prenom_emp,nom_emp,adr_emp,numtel_emp,cni,age,fonc_emp) VALUES(:prenom, :nom, :adresse, :numtel, :cni, :age, :fonction)");
				$vibe->bindParam(':prenom',$pre);
				$vibe->bindParam(':nom',$no);
				$vibe->bindParam(':adresse',$adr);
				$vibe->bindParam(':numtel',$tel);
				$vibe->bindParam(':age',$age);
				$vibe->bindParam(':cni',$cni);
				$vibe->bindParam(':fonction',$fonc);
				$vibe->execute();

				header("location:../employes.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}


 ?>