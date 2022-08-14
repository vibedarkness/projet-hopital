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
				<form action="execord.php" method="POST">
					<h3>Ajouter ordonnance</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Date:</label>
							<div class="form-holder">
								<input type="date" class="form-control" name="date">
							</div>
						<div class="form-wrapper">
							<br><label for="">Diagnostic:</label>
							<div class="form-holder">
								<input type="text" class="form-control" name="diag">
							</div>
						<div class="form-wrapper">
							<br><label for="">prinscription:</label>
							<div class="form-holder">
								<textarea cols="50" rows="30" name="inscrip"></textarea>
								<input type="hidden" name="matricule" value=<?php echo $_GET['matriculep'];  ?> >
							</div>

						</div>
					</div>

						<div class="button-holder">
							<button style="background-color: green;">livrer</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>