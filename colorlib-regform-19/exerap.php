<?php 


$sexe=$_POST['sexe'];
$tranche=$_POST['tranche'];
$date=$_POST['annee'];
$malad=$_POST['maladie'];

$strDate = explode("-", $date);
$year = $strDate[0];//Année
$month = $strDate[1];//mois



//echo $malad;
//$mal=$_GET['id'];


			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$vibe=$omzo->prepare("INSERT INTO rapport(date_rap,tranche,sexe,nom_mal,annee,mois) VALUES(:dates, :tranche, :sexe, :maladi, :ans, :mois)");
				$vibe->bindParam(':dates',$date);
				$vibe->bindParam(':tranche',$tranche);
				$vibe->bindParam(':sexe',$sexe);
				$vibe->bindParam(':maladi',$malad);
				$vibe->bindParam(':ans',$year);
				$vibe->bindParam(':mois',$month);
				$vibe->execute();

				header("location:../pharmacie.php");

			}catch(PDOException $e){
			    echo 'impossible .erreur'.$e->getmessage();

			}














/*try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$var=$omzo->prepare('SELECT * FROM rapport WHERE id="'.$mal.'"');
				$var->execute();

				$row = $var->fetchAll(PDO::FETCH_ASSOC);
				$mas=$row[0]['M'];
				$fem=$row[0]['F'];
				$un=$row[0]['0-11'];
				$deux=$row[0]['12-59'];
				$trois=$row[0]['5-9'];()
				$quatre=$row[0]['10-14'];
				$cinq=$row[0]['15-19'];
				$six=$row[0]['20-24'];
				$sept=$row[0]['25-49'];
				$huit=$row[0]['50-59'];
				$neuf=$row[0]['60ans+'];
				$dix=$row[0]['Nd'];



					if ($sexe == "masculin") {
						if ($tranche == "0-11mois") {
							
						$vibe=$omzo->prepare("INSERT INTO rapport(M,0_11) VALUES(:mas,:un)");
						$vibe->bindParam(':mas',$mas+1);
						$vibe->bindParam(':un',$un);
						$vibe->execute();
						}elseif ($tranche == "12-59mois") {
							# code...
						}elseif ($tranche == "5-9ans") {
							# code...
						}elseif ($tranche == "10-14ans") {
							# code...
						}elseif ($tranche == "15-19ans") {
							# code...
						}elseif ($tranche == "20-24ans") {
							# code...
						}elseif ($tranche == "25-49ans") {
							# code...
						}elseif ($tranche == "50-59ans") {
							# code...
						}elseif ($tranche == "60ans+") {
							# code...
						}elseif ($tranche == "AgeNd") {
							# code...
						}

					}elseif ($sexe == "feminin") {
						if ($tranche == "0-11mois") {
							# code...
						}elseif ($tranche == "12-59mois") {
							# code...
						}elseif ($tranche == "5-9ans") {
							# code...
						}elseif ($tranche == "10-14ans") {
							# code...
						}elseif ($tranche == "15-19ans") {
							# code...
						}elseif ($tranche == "20-24ans") {
							# code...
						}elseif ($tranche == "25-49ans") {
							# code...
						}elseif ($tranche == "50-59ans") {
							# code...
						}elseif ($tranche == "60ans+") {
							# code...
						}elseif ($tranche == "AgeNd") {
							# code...
						}
					}

				}catch(PDOException $e){
			    echo 'imposssible .erreur'.$e->getmessage();

			}*/


 ?>