<?php
  include'../connexion-db.php';

  $nom = '';
  $quant = '';
  $prix = '';
  $matricule = $_GET['nom_medic'];
 

  $query = "SELECT * FROM pharmacie WHERE nom_medic='".$_GET['nom_medic']."'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nom = $row['nom_medic'];
      $quant = $row['quantite'];
      $prix = $row['prix'];
      
    }
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
			<div class="inner">
				<form action="<?php echo'modexes.php?nom_medic='.$matricule?>" method="POST" >
					<h3>Modifier Medicament</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Quantite:</label>
							<div class="form-holder">
								<input type="number" class="form-control" name="quantites" value=<?php echo $quant ; ?>>
							</div>
						</div>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="form-wrapper">
							<label for="">Prix:</label>
							<div class="form-holder">
								<input type="number" class="form-control" name="prix" value=<?php echo $prix ; ?>>
							</div>
						</div>
					</div>

						<div class="button-holder" >
							<button style="background-color: green;">Modifier</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>