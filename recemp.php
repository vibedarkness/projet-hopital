
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
            <li><a class='btn btn-success float-start' href="colorlib-regform-19/ajouteremp.php">Ajouter Employes</a></li>
          </ol>
                   <?php echo "<form class='form-signin' action='recemp.php' method='POST'>
<input type='text' name='requete' class='form-header'>
<input type='submit' value='Recherche' class='btn-success'>
</form>";
 ?>
        </div>


      </div>
    </section><!-- End Breadcrumbs Section -->
    <div class="container">
      <h1 style="text-align: center;">LA LISTE DES EMPLOYES</h1>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>AGE</th>
            <th>ADRESSE</th>
            <th>TELEPHONE</th>
            <th>FONCTION</th>
            <th>Salaire</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody style="background-color: rgb(197,199,198);" >    
  <?php
  include('connexion-db.php');



   
$req = 'SELECT  * FROM employe';
  $result = $conn->query($req);
       $req = "SELECT * FROM employe WHERE nom_emp LIKE ? " ;
     $parm = "%";
     $param_term = $parm . $_REQUEST["requete"] . "%";
         if($stmt = mysqli_prepare($conn, $req)){
         
         mysqli_stmt_bind_param($stmt, "s", $param_term);
         if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
        echo '<br><div class="table-header"><div class="card-header">Patients</div>';
        if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo "<tr><td>".$row["id_emp"]."</td><td>".$row["nom_emp"]."</td><td>".$row["prenom_emp"]."</td><td>".$row["age"]."</td><td>".$row["adr_emp"]."</td><td>".$row["numtel_emp"]."</td><td>".$row["fonc_emp"]."</td><td>".$row["cni"]."</td><td><a class='btn btn-success float-center' href='colorlib-regform-19/modifieremp.php?id_emp=".$row["id_emp"]."''>MODIFIER</a></td></tr></tr>";
    }
    }
    }
    echo "</table>";
  } else {
    echo '<p class="align-middle">La liste des employes est vide</p>';
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
        