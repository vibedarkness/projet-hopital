<?php 
	include('../connexion-db.php');
	
	$matricule = $_GET['id_emp'];

	$query = "UPDATE employe SET nom_emp='".$_POST['nom']."',prenom_emp='".$_POST['prenom']."',age='".$_POST['age']."',adr_emp='".$_POST['adresse']."',numtel_emp='".$_POST['telephone']."',cni='".$_POST['cni']."', fonc_emp='".$_POST['fonction']."' WHERE id_emp=".$matricule;
	
	if ($conn->query($query) === TRUE) {
	  echo "Produit mis à jour avec succès";
	 header('Location: ../employes.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
 ?>