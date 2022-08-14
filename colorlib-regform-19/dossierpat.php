<?php 



 $matricule=$_GET['matriculep'];


			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$var=$omzo->prepare('SELECT * FROM patient WHERE matriculep="'.$matricule.'"');
				$var->execute();

				$vari=$omzo->prepare('SELECT * FROM ordonnance WHERE matriculep="'.$matricule.'"');
				$vari->execute();
				

        			$row = $var->fetchAll(PDO::FETCH_ASSOC);
        		
        			

			}catch(PDOException $e){
			    echo 'imposssible .erreur'.$e->getmessage();

			}

				
           	?>





<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Clinique Gandiaye</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" href="bootstrap.css">
   			 <script src="jquery-3.5.1.slim.min.js" ></script>
    		<script src="bootstrap.bundle.min.js" ></script>

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner" style="background-color: rgb(197,199,198); width: 80%;">
				<form action="">
					<h3><u>Information Patient</u>&nbsp&nbsp N°:<?php echo $row[0]['matriculep'];  ?></h3>
					<h3><u>nom:</u>&nbsp&nbsp<?php echo $row[0]['nom'];  ?></h3>
					<h3><u>prenom:</u>&nbsp&nbsp<?php echo $row[0]['prenom'];  ?></h3>
					<h3><u>age:</u>&nbsp&nbsp<?php echo $row[0]['age'];  ?></h3>
					<h3><u>sexe:</u>&nbsp&nbsp<?php echo $row[0]['sexep'];  ?></h3>
					<h3><u>adresse:</u>&nbsp&nbsp<?php echo $row[0]['adresse'];  ?></h3>
					<h3><u>numero:</u>&nbsp&nbsp<?php echo $row[0]['numtel'];  ?></h3>
					<div class="form-group">
					<div class="form-wrapper">
					<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u>ORDONNANCES</u></h3>
					<div class="">
						
						<?php 
						//$cpt= array();
									

							$i=0;

						$rows = $vari->fetchAll(PDO::FETCH_ASSOC);
						foreach ($rows as $ro ) {
							
							$i++;
							echo'<a href="ordonnancepat.php?id_ord='.$ro['id_ord'].'" class="btn btn-secondary" style="margin-left:150px;"> 
									ordonnance'.$i.'</a>';
									
						}
							 ?>
					</div>
					
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
