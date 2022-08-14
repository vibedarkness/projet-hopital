<!-- <!DOCTYPE html>
<html lang="en">
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



 <!-- <?php

    // include('connexion-db.php');
     //$nom = $_POST['requete'];

    // $req = "SELECT * FROM pharmacie WHERE nom_medic LIKE ? " ;
    // $parm = "%";
    // $param_term = $parm . $_REQUEST["requete"] . "%";
         //if($stmt = mysqli_prepare($conn, $req)){
         
         //mysqli_stmt_bind_param($stmt, "s", $param_term);
         //if(mysqli_stmt_execute($stmt)){
          //$result = //mysqli_stmt_get_result($stmt);
        //echo '<br><div class="table-header"><div class="card-header">Pharmacie</div>';
        //if(mysqli_num_rows($result) > 0): ?>
           <table class="table table-bordered">
    <tr><th>NOM</th><th>QUANTITE</th><th>PRIX</th><th>ACTION</th></tr>

           <?php //while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                <tr>
            <td><?php //echo $row["nom_medic"]; ?></td>
            <td><?php //echo $row["quantite"]; ?></td>
            <td><?php //echo $row["prix"]; ?></td>
            <td><a class='btn btn-info float-left'; href='colorlib-regform-19/vendremedic.php?nom_medic=".$row["nom_medic"]."'>vendre</a><a class='btn btn-success float-right;' href='colorlib-regform-19/modifiermedic.php?nom_medic=".$row["nom_medic"]."'>STOCKER</a></td><td></td></tr>";</td>                                  
            
          <?php  //endwhile; ?>
         <?php //echo "</table></div>"; ?>
        
        <?php //endif; 
            //   }
            // }
            ?> -->

             
     <!--        <a class='btn btn-success float-start' href="pharmacie.php">pharmacie</a>
            
          

    </body>
     -->
    <!-- </html> --> -->



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
            <li><a class='btn btn-success float-start' href="colorlib-regform-19/ajoutermedic.php">Ajouter Medicament</a></li>
          </ol>
<form class='form-signin' action='recherchephar.php' method='GET'>
<input type='text' name='requete' class='form-header'>
<input type='submit' value='Recherche' class='btn-success'>
</form>

        </div>


      </div>
</section><!-- End Breadcrumbs Section -->
        <div class="container">
      <h1 style="text-align: center;">LA LISTE DES MEDICAMENTS</h1>
     

      <table class="table table-bordered" style="width: 80%; margin-left: 120px;" id="list">
        <thead class="thead-dark">
          <tr>
            
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Quantite</th>
            <th style="text-align: center;">Prix</th>
            <th style="text-align: center;">Actions</th>
            <th style="text-align: center;">Total Vendu</th>

            
          </tr>
        </thead>
        <tbody style="background-color: rgb(197,199,198);" >    
  <?php
  include('connexion-db.php');


   
$req = 'SELECT  * FROM pharmacie';
  $result = $conn->query($req);


     $req = "SELECT * FROM pharmacie WHERE nom_medic LIKE ? " ;
     $parm = "%";
     $param_term = $parm . $_REQUEST["requete"] . "%";
         if($stmt = mysqli_prepare($conn, $req)){
         
         mysqli_stmt_bind_param($stmt, "s", $param_term);
         if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
        //echo '<br><div class="table-header"><div class="card-header">Pharmacie</div>';
        if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo "<tr><td>".$row["nom_medic"]."</td><td>".$row["quantite"]."</td><td>".$row["prix"]."</td><td><a class='btn btn-info float-left';' href='colorlib-regform-19/vendremedic.php?nom_medic=".$row["nom_medic"]."''>VENDRE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class='btn btn-success float-right;' href='colorlib-regform-19/modifiermedic.php?nom_medic=".$row["nom_medic"]."''>STOCKER</a></td><td>".$row["historique"]."</td></tr>";
        }

        }
    }
    echo "</table>";
  } else {
    echo '<p class="align-middle">La liste des medicaments est vide</p>';
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
        