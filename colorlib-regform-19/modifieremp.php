<?php
  include'../connexion-db.php';

  $nom = '';
  $prenom = '';
  $adresse = '';
  $telep = '';
  $cni = '';
  $age = '';
  $fonc = '';
  $matricule = $_GET['id_emp'];
 

  $query = "SELECT * FROM employe WHERE id_emp='".$_GET['id_emp']."'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nom = $row['nom_emp'];
      $prenom = $row['prenom_emp'];
      $adresse = $row['adr_emp'];
      $telep = $row['numtel_emp'];
      $cni = $row['cni'];
      $age = $row['age'];
      $fonc = $row['fonc_emp'];
      
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
				<form action="<?php echo'modexe.php?id_emp='.$matricule?>" method="POST">
					<h3>Modifier Employé</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="nom" value=<?php echo $nom;  ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Prenom:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="prenom" value=<?php echo $prenom;  ?>>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="age" value=<?php echo $age;  ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Adresse:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="adresse" value=<?php echo $adresse;  ?> >
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Telephone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="number" class="form-control" placeholder="" name="telephone" value=<?php echo $telep;  ?>>
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Fonction:</label>
							<div class="form-holder ">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="fonction" value=<?php echo $fonc;  ?>>
							</div>
						</div>

						&nbsp&nbsp&nbsp<div class="form-wrapper">
							<label for="">Salaire:</label>
							<div class="form-holder ">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="number" class="form-control" placeholder="" name="cni" value=<?php echo $cni;  ?>>
							</div>
						</div>
					</div>
						&nbsp&nbsp&nbsp<div class="button-holder" >
							<button style="background-color: green;">Modifier</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
		
	</body>
</html>