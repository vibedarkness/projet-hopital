<!DOCTYPE html>
<html>
<head>
	<title>gestion clinique</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	<style>
		h1{
			text-align: center;
		}
		 
	</style>
</head>
<body>
	 
	<div class="container">
      <h1>LA LISTE DES EMPLOYES</h1>
      <table class="table">
        <thead class="thead-green">
          <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>AGE</th>
            <th>ADRESSE</th>
            <th>TELEPHONE</th>
            <th>FONCTION</th>
            <th>CNI</th>
            <th>ACTION</th>
          </tr>
        </thead>
	<?php
	include('connexion-db.php');


	 
$req = 'SELECT  * FROM employe';
	$result = $conn->query($req);

	if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        	 echo "<tr><td>".$row["id_emp"]."</td><td>".$row["nom_emp"]."</td><td>".$row["prenom_emp"]."</td><td>".$row["age"]."</td><td>".$row["adr_emp"]."</td><td>".$row["numtel_emp"]."</td><td>".$row["fonc_emp"]."</td><td>".$row["cni"]."</td><td><a class='btn btn-warning float-center' style='background: green;' href='plus.php?id_emp=".$row["id_emp"]."''>MODIFIER</a></td><td><a class='btn btn-warning float-start' href='editfor.php?id_emp=".$row["id_emp"]."''>DOSSIER</a>&nbsp; &nbsp;<a class='btn btn-warning float-center' style='background: green;' href='plus.php?id_emp=".$row["id_emp"]."''>ORDONNANCE</a></td></tr></tr>";
	  }
	  echo "</table>";
	} else {
	  echo '<p class="align-middle">La liste des formateurs est vide</p>';
	}
	$conn->close();

	echo '</div></div></div>';

        
    ?>

    