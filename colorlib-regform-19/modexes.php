<?php 
	include('../connexion-db.php');
	
	$matricule = $_GET['nom_medic'];
	$quantite=$_POST['quantites'];
	$prix=$_POST['prix'];

	$query = "UPDATE pharmacie SET quantite=$quantite,prix=$prix WHERE nom_medic='$matricule'";
	
	if ($conn->query($query) === TRUE) {
	  echo "Produit mis à jour avec succès";
	 header('Location: ../pharmacie.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>