
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    
    <!-- MDB icon -->
    <link rel="icon" href="img/isep.jpg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
  </head>

<body>

</body>
</html>

<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <div class="container">
        <form method="POST" action="patients.php">
          <div class="row">
            <div class="col">
              <label for="nom" class="form-label">NOM</label>
              <input type="text" name="nom" class="form-control" id="nom">
              <br><br>

              <label for="prenom" class="form-label">PRENOM</label>
              <input type="text" name="prenom" class="form-control" id="prenom">
            <br><br>

              <label for="age" class="form-label">AGE</label>
              <input type="texte" name="age" class="form-control" id="age">
               <br><br>

               <label for="numtel" class="form-label">TELEPHONE</label>
              <input type="number" name="numtel" class="form-control" id="numtel">
              <br><br>

              <label for="adresse" class="form-label">ADRESSE</label>
              <input type="text" name="adresse" class="form-control" id="adresse">
              <br><br>

             <label for="adresse" class="form-label">sexe</label>
              <input type="text" name="sexep" class="form-control" id="sexe">
            
             
            </div>
          </div>
         
            <br>
            <button type="submit" class="btn btn-success align-middle">Enregistrer</button>
        </form>
      </div>
    </div>
  </div>
</div>