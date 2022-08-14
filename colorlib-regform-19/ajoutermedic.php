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
				<form action="ajmed.php" method="POST">
					<h3>Ajouter Medicament</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" name="nom">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Quantite:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="number" class="form-control" name="quantite">
							</div>
						</div>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="form-wrapper">
							<label for="">Prix:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="number" class="form-control" name="prix">
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