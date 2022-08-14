
<!DOCTYPE html>
<html lang="en">


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
  <?php include 'nav.php'; ?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a class='btn btn-success float-start' href="colorlib-regform-19/ajouterpatient.php">Ajouter Patient</a>
            </li>
          </ol>
         <?php echo "<form class='form-signin' action='inner-page.php' method='POST'>
<input type='search' name='requete' class='form-header'>
<input type='submit' value='Recherche' class='btn-success'>
</form>";
 ?>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
   
  <div class="container">
      <h1>LA LISTE DES PATIENTS</h1>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th style="text-align: center;">ACTION</th>
          </tr>
        </thead>
  <?php
  include('connexion-db.php');
  
   $nom = $_POST['requete'];
   $req = 'SELECT  * FROM patient WHERE nom=$id';
  $result = $conn->query($req);

  if ($result->num_rows > 0) {
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
// set how much show posts in a single page
$total_records_per_page = 5;
// Set Offset
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM patient");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;

    $result = mysqli_query($conn,"SELECT * FROM patient LIMIT $offset, $total_records_per_page");

        while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["matriculep"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td><a class='btn btn-secondary float-center'; href='colorlib-regform-19/modifierpat.php?matriculep=".$row["matriculep"]."''>MODIFIER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class='btn btn-warning float-center' href='colorlib-regform-19/dossierpat.php?matriculep=".$row["matriculep"]."''>DOSSIER</a>&nbsp; &nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class='btn btn-warning float-center' style='background: green;' href='colorlib-regform-19/ordonnance.php?matriculep=".$row["matriculep"]."''>ORDONNANCE</a></td></tr></tr>";
    }
    echo "</table>";
  } else {
    echo '<p class="align-middle">La liste des patients est vide</p>';
  }
  $conn->close();

  echo '</div></div></div>';
  ?>
  <tr>
<?php if($page_no > 1){
echo "<td><a class='btn btn-info float-end' href='?page_no=1'>Première page</a></td>";
} ?> &nbsp;

<td <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a class='btn btn-info float-end' <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Suivant</a>
</td>&nbsp;
  
<td <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a class='btn btn-secondary float-start' <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Précedent</a>
</td>&nbsp;
    

<?php if($page_no < $total_no_of_pages){
echo "<td><a class='btn btn-secondary float-start' href='?page_no=$total_no_of_pages'>Dernier page </a></td>";
} 
?>
</tr>

<?php

/*     include('connexion-db.php');
     $nom = $_POST['requete'];

     $req = "SELECT * FROM patient WHERE prenom LIKE ? " ;
     $parm = "%";
     $param_term = $parm . $_REQUEST["requete"] . "%";
         if($stmt = mysqli_prepare($conn, $req)){
         
         mysqli_stmt_bind_param($stmt, "s", $param_term);
         if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
        echo '<br><div class="table-header"><div class="card-header">Patients</div>';
        if(mysqli_num_rows($result) > 0): ?>
           <table class="table table-bordered">
    <tr><th>MATRICULE</th><th>PRENOM</th><th>NOM</th></tr>

           <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                <tr>
            <td><?php echo $row["matriculep"]; ?></td>
            <td><?php echo $row["nom"]; ?></td>
            <td><?php echo $row["prenom"]; ?></td>                                  
            
          <?php  endwhile; ?>
         <?php echo "</table></div>"; ?>
        
        <?php endif; 
              }
            }*/
        ?>


    


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
