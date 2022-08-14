<?php 
	include('../connexion-db.php');
	
	$matricule = $_GET['matriculep'];

	$query = "UPDATE patient SET nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',age='".$_POST['age']."',adresse='".$_POST['adresse']."',numtel='".$_POST['tel']."',sexep='".$_POST['sexe']."' WHERE matriculep=".$matricule;
	
	if ($conn->query($query) === TRUE) {
	  echo "Produit mis à jour avec succès";
	 header('Location: ../inner-page.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>