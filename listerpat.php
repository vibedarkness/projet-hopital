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
      <h1>LA LISTE DES PATIENTS</h1>
      <table class="table">
        <thead class="thead-green">
          <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>AGE</th>
            <th>ADRESSE</th>
            <th>TELEPHONE</th>
            <th>ACTION</th>
          </tr>
        </thead>
	<?php
	include('connexion-db.php');


	 
$req = 'SELECT  * FROM patient';
	$result = $conn->query($req);

	if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        	 echo "<tr><td>".$row["matriculep"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["age"]."</td><td>".$row["adresse"]."</td><td>".$row["numtel"]."</td><td>".$row["sexep"]."</td><td><a class='btn btn-warning float-center' style='background: green;' href='forms.php?matriculep=".$row["matriculep"]."''>MODIFIER</a></td><td><a class='btn btn-warning float-start' href='dossier.php?matriculep=".$row["matriculep"]."''>DOSSIER</a>&nbsp; &nbsp;<a class='btn btn-warning float-center' style='background: green;' href='ordonnance.php?matriculep=".$row["matriculep"]."''>ORDONNANCE</a></td></tr></tr>";
	  }
	  echo "</table>";
	} else {
	  echo '<p class="align-middle">La liste des foramateurs est vide</p>';
	}
	$conn->close();

	echo '</div></div></div>';

        
    ?>

    