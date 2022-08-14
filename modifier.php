<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ISEP</title>
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
    <style> 
    body{ background: #d2af77; }</style>
  </head>
<body>


</body>
</html>
<?php
  // include('bootstrap.php');
  // include('menu.php');
  include('connexion.php');

 /* $nom = '';
  $prenom = '';
  $age = 0;
  $email = 0;
  $idf = '';*/

  $query = "SELECT * FROM patient   ";
  $result = $conn->query($query);
 
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $matriculep= $row['matriculep'];
      $prenom=$row['prenom'];
       $nom = $row['nom'];
      //$email = $row['email'];
     
     
      $numtel = $row['numtel'];
      $age = $row['age'];
       $adresse = $row['adresse'];
        $sexep = $row['sexep'];
     

    //  $idf = $row['idf'];
     // $categorie_id = $row['categorie_id'];
      # code...
    }
  }
?>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">

      <div class="container">
        <form method="POST" action="modifier.php">
          <div class="row">
            <div class="col">
              <label for="nom" class="form-label">NOM</label>

              <input type="text" name="matriculep" class="form-control" id="matriculep" value="<?php echo $matriculep  ?>" hidden>
               <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $nom  ?>">
              <label for="prenom" class="form-label">prenom</label>
              <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $prenom ?>">
                
              
             <label for="telephone" class="form-label">TELEPHONE</label>
              <input type="text" name="telephone" class="form-control" id="numtel" value="<?php echo $numtel ?>">
              
              <label for="adresse" class="form-label">ADRESSE</label>
              <input type="adresse" name="adresse" class="form-control" id="email" value="<?php echo $adresse ?>">
              <label for="age" class="form-label">AGE</label>
              <input type="text" name="age" class="form-control" id="age" value="<?php echo $age ?>">
               <label for="age" class="form-label">sexe</label>
              <input type="text" name="sexep" class="form-control" id="sexep" value="<?php echo $sexep ?>">
            </div>
          </div>
         
            <!-- <div class="col">
              <label for="description" class="form-label">Description du produit</label>
              <textarea name="description" class="form-control" id="description"><?php ($description)?></textarea>
            </div> -->
            <br>
            <button type="submit" class="btn btn-success align-middle">Mettre à jour</button>
        </form>
      </div>
    </div>
  </div>
