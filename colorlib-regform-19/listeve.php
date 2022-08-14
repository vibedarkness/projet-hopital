<?php 


 $nm=$_POST['nom'];
 

			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$var=$omzo->prepare('SELECT quantite , historique FROM pharmacie WHERE nom_medic="'.$nm.'"');
				$var->execute();

        			$row = $var->fetchAll(PDO::FETCH_ASSOC);

    				$quantite=$row[0]['quantite'];
        				$quant= $quantite - $_POST['quantite'];
        				$quanthisto = $row[0]['historique'];
        				$quanthisto = $quanthisto + $_POST['quantite'];  
        				//var_dump($quanthisto);
        				//echo($quant);
        				if ($quantite > 0) {
        					
        					$vibe=$omzo->prepare('UPDATE pharmacie SET quantite= "'.$quant.'",historique = "'.$quanthisto.'" WHERE nom_medic="'.$nm.'"');
							$vibe->execute();

							

							header("location:../pharmacie.php");
        				}
        				
        			

        		



			}catch(PDOException $e){
			    echo 'imposssible .erreur'.$e->getmessage();

			}

				
           	?>



