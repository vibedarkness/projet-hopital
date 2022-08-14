
<?php
  include'../connexion-db.php';

  $nom = '';
  $prenom = '';
  $age = '';
  $adresse = '';
  $tele = '';
  $matricule = $_GET['matriculep'];
 

  $query = "SELECT * FROM Patient WHERE matriculep='".$_GET['matriculep']."'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $age = $row['age'];
      $adresse = $row['adresse'];
      $tele = $row['numtel'];
      
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
				<form action="<?php echo'modex.php?matriculep='.$matricule?>" method="POST">
					<h3>Modifier Patient</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="nom" value=<?php echo $nom; ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Prenom:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="prenom" value=<?php echo $prenom; ?>>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="age" value=<?php echo $age; ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Adresse:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="adresse" value=<?php echo $adresse; ?>>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Telephone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="number" class="form-control" placeholder="" name="tel" value=<?php echo $tele; ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Sexe:</label>
							<div class="form-holder select">
								<select name="sexe" id="" class="form-control">
									<option value="Masculin">Masculin</option>
									<option value="Feminin">Feminin</option>
									<option value="autres">autres</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
						<div class="button-holder">
							<button style="background-color: green;">Modifier</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>