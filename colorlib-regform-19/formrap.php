<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap.css">
    	<script src="jquery-3.5.1.slim.min.js" ></script>
    	<script src="bootstrap.bundle.min.js" ></script>
		<title>Clinique Gandiaye</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
		<br><br><br><a class='btn btn-success float-start' href="ajoutermaladi.php">Ajouter maladie</a>

		<div class="wrapper">
			<div class="inner">
				<form action="exerap.php" method="POST">
					<h3>Ajouter Rapport</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Maladie:</label>
							<div class="form-holder select">
								<select name="maladie" id="" class="form-control">
					              <?php 
          							 include('../connexion-db.php');
            						$query = "SELECT nom_mal FROM maladie";
						            $result = $conn->query($query);
						            if($result->num_rows > 0) {
						              while ($row = $result->fetch_assoc()){?>
						                <option>
						                <?php  
						                echo $row['nom_mal'];?>
						            
						                </option>
						                <?php
						                  }
						            }
						              $conn->close();
						           ?>
								</select>

							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Date:</label>
							<div class="form-holder">
								<input type="date" class="form-control" placeholder="" name="annee" required>
							</div>
					</div>

					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Tranche d'age:</label>
							<div class="form-holder select">
								<select name="tranche" id="" class="form-control">
								 <option value="0_11mois">0-11mois</option>
								<option value="12_59mois">12-59mois</option>
								<option value="5_9ans">5-9ans</option>
								<option value="10_14ans">10-14ans</option>
								<option value="15_19ans">15-19ans</option>
								<option value="20_24ans">20-24ans</option>
								<option value="25_49ans">25-49ans</option>
								<option value="50_59ans">50-59ans</option>
								<option value="60ansplus">60ans+</option>
								<option value="AgeNd">AgeNd</option>
										
								</select>
								
							</div>
						</div>

						<div class="form-wrapper">
							<label for="">Sexe:</label>
							<div class="form-holder select">
								<select name="sexe" id="" class="form-control">
									<option value="masculin">Masculin</option>
									<option value="feminin">Feminin</option>
									
								</select>
								
							</div>
						</div>
					</div>
						<div class="button-holder">
							<button style="background-color: green;">Soumettre</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>