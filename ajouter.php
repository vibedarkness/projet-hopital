
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
  </head>
<body>

</body>
</html>
<?php
  // include('bootstrap.php');
  // include('menu.php');
  include('connexion_db.php');

 /* $nom = '';
  $prenom = '';
  $age = 0;
  $email = 0;
  $idf = '';*/
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinique";
$numpat= $_GET['numpat'];
  // $categorie_id = 0;
//var_dump($id);
//die('okkkkk');
$conn = new mysqli($servername, $username, $password, $dbname);

  $query = "SELECT * FROM patient WHERE numpat='$numpat'  ";
  $result = $conn->query($query);
 
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $numpat= $row['numpat'];
      $nom=$row['nom'];
       $prenom = $row['prenom'];
      $adresse = $row['adresse'];
     
     
      $numtel = $row['numtel'];
      

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
        <form method="POST" action="update.php">
          <div class="row">
            <div class="col">
              <label for="numpat" class="form-label">NUMERO PATIENT</label>

              <input type="number" name="numpat" class="form-control" id="numpat" value="<?php echo $numpat  ?>" hidden>
              
              <label for="nom" class="form-label">NOM</label>
              <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $prenom ?>">
                <label for="prenom" class="form-label">PRENOM</label>
              <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $prenom ?>">
             <label for="adresse" class="form-label">ADRESSE</label>
              <input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo $adresse ?>">
              
              <label for="numtel" class="form-label">NUMERO TELEPHONE</label>
              <input type="number" name="numtel" class="form-control" id="numtel" value="<?php echo $numtel ?>">
              
            </div>
          </div>
          <?php 
             /*include('connexion_db.php');
            echo '<div class="col"><label for="filiere" class="form-label">FILIERE</label>
              <select idf="filiere" name="filiere" class="form-control">';
            $query = "SELECT * FROM filiere";
            $result = $conn->query($query);
            if($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                if ($row['id'] === $categorie_id) {
                  echo '<option selected="selected" value="'.$row['idFormateur'].'">'.$row['description'].'</option>';
                } else {
                  echo '<option value="'.$row['idFormateur'].'">'.$row['description'].'</option>';
                
                }
              }
            }
              echo '</select>';
              echo '</div>';
              $conn->close();
           
            <!-- <div class="col">
              <label for="description" class="form-label">Description du produit</label>
              <textarea name="description" class="form-control" id="description"><?php ($description)?></textarea>
            </div> -->*/
            ?>
            <br>
            <button type="submit" class="btn btn-success align-middle">Mettre à jour</button>
        </form>
      </div>
    </div>
  </div>
