
    <?php
session_start();
include 'sylla.php';


if (!$_SESSION['username']) {
                            
            header('location:login_v1/index.php');
       
    }

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'nav.php'; ?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a class='btn btn-success float-start' href="colorlib-regform-19/ajouterpatient.php">Ajouter Patient</a>
            </li>
          </ol>
         <?php echo "<form class='form-signin' action='veryrec.php' method='POST'>
<input type='text' name='requete' class='form-header'>
<input type='submit' value='Recherche' class='btn-success'>
</form>";
 ?>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
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
      <table class="table table-bordered" style="width: 100%; margin:0 auto;">
        <thead class="thead-dark">
          <tr  style="width: 100px;">
            <th >ID</th>
            <th >NOM</th>
            <th >PRENOM</th>
            <th >ADRESSE</th>
            <th >SEXE</th>
            <th style="text-align: center;">ACTIONS</th>
          </tr>
        </thead>
         <tbody style="background-color: rgb(197,199,198); width: 100px;" > 
  <?php
  include('connexion-db.php');
  
   
$req = 'SELECT  * FROM patient';
  $result = $conn->query($req);


     $req = "SELECT * FROM patient WHERE nom LIKE ? " ;
     $parm = "%";
     $param_term = $parm . $_REQUEST["requete"] . "%";
         if($stmt = mysqli_prepare($conn, $req)){
         
         mysqli_stmt_bind_param($stmt, "s", $param_term);
         if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
        //echo '<br><div class="table-header"><div class="card-header">Patients</div>';
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo "<tr><td>".$row["matriculep"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["adresse"]."</td><td>".$row["sexep"]."</td><td><a class='btn btn-info float-center'; href='colorlib-regform-19/modifierpat.php?matriculep=".$row["matriculep"]."''>MODIFIER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class='btn btn-warning float-center' href='colorlib-regform-19/dossierpat.php?matriculep=".$row["matriculep"]."''>DOSSIER</a>&nbsp; &nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class='btn btn-success float-center' href='colorlib-regform-19/ordonnance.php?matriculep=".$row["matriculep"]."''>ORDONNANCE</a></td></tr></tr>";
    }
    }
    }

    echo "</table>";
  } else {
    echo '<p class="align-middle">La liste des patients est vide</p>';
  }
  $conn->close();

  echo '</div></div></div>';
  ?>
</tbody>



    


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

        