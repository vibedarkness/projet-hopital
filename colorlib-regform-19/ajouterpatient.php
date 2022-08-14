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
				<form action="execpat.php" method="POST">
					<h3>Ajouter Patient</h3>
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
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="prenom">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Age:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" placeholder="" name="age">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Adresse:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" placeholder="" name="adresse">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Telephone:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="number" class="form-control" placeholder="" name="telephone">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Sexe:</label>
							<div class="form-holder select">
								<select name="sexe" id="" class="form-control">
									<option value="Masculin">Masculin</option>
									<option value="Feminin">Feminin</option>
									<option value="autre">autres</option>
								</select>
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
						<div class="button-holder">
							<button style="background-color: green;">Ajouter</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
