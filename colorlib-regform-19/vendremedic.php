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
			<div class="inner">
				<form action="listeve.php" method="POST">
					<h3>Vendre Medicament</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom:</label>
							<div class="form-holder">
								<p><?php echo $_GET["nom_medic"]; ?> </p>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Quantite:</label>
							<div class="form-holder">
								<input type="number" class="form-control" name="quantite">
								<input type="hidden" name="nom" value=<?php echo'"'.$_GET["nom_medic"].'"'; ?>>
							</div>
						</div>
					</div>

						<div class="input-holder" >
							<input type="submit" name="vendre" value="Vendre" style="background-color: green;">
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php 



 ?>