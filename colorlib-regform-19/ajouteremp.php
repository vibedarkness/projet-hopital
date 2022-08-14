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
				<form action="ajemp.php" method="POST">
					<h3>Ajouter Employé</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="nom">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Prenom:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="text" class="form-control" name="prenom">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="age">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Adresse:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="adresse">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Telephone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="number" class="form-control" placeholder="" name="telephone">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Fonction:</label>
							<div class="form-holder ">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="text" class="form-control" placeholder="" name="fonction">
							</div>
						</div>

						&nbsp&nbsp&nbsp<div class="form-wrapper">
							<label for="">Salaire:</label>
							<div class="form-holder ">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="number" class="form-control" placeholder="" name="cni">
							</div>
						</div>
					</div>
						&nbsp&nbsp&nbsp<div class="button-holder">
							<button style="background-color: green;">Ajouter</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>
<?php 

include "../connexion-db.php";

if(isset($_POST)){
    
    $prenom=htmlentities($_POST["prenom"]);
    $nom=htmlentities($_POST["nom"]);
    $adresse=htmlentities($_POST["adresse"]);
    $numtel=htmlentities($_POST["telephone"]);
    $age=htmlentities($_POST["age"]);
    $cni=htmlentities($_POST["cni"]);
    $fonction=htmlentities($_POST["fonction"]);

    $req="INSERT INTO 'employe' ('id_emp','prenom_emp','nom_emp','adr_emp','numtel_emp','cni','age','fonc_emp') VALUES(NULL,'$prenom','$nom','$adresse','$numtel','$age','$cni','$fonction')";
    $result=mysqli_query($conn,$req);

    if ($result) {
    	echo "enregistrement reussi";
    }else{
    	echo "erreur". $req . "" .mysqli_error($conn);
    }
    $conn->close();
    header("location:../employes.php");
    
}
?>

