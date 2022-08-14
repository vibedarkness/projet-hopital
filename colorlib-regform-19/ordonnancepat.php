 <?php  

 $ordo=$_GET['id_ord'];


			try{

			  $omzo=new PDO ('mysql:host=localhost;dbname=clinique','root','');
				$omzo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$var=$omzo->prepare('SELECT * FROM ordonnance WHERE id_ord="'.$ordo.'"');
				$var->execute();

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

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner" style="background-color: rgb(197,199,198);">
				<form action="">
					<h3><u>Date:</u> <?php echo $row[0]['date_ord'];  ?></h3><br>
					<h3><u>Diagnostic:</u> <?php echo $row[0]['diagnostic'];  ?></h3><br>
					<h3><u>Preinscription:</u><br></h3><br>
					<h4 style="text-align: center;"><?php echo $row[0]['desc_ord'];?></h4>

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>