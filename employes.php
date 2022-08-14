
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

$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM employe");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;

    $result = mysqli_query($conn,"SELECT * FROM employe LIMIT $offset, $total_records_per_page");

        while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["id_emp"]."</td><td>".$row["nom_emp"]."</td><td>".$row["prenom_emp"]."</td><td>".$row["age"]."</td><td>".$row["adr_emp"]."</td><td>".$row["numtel_emp"]."</td><td>".$row["fonc_emp"]."</td><td>".$row["cni"]."</td><td><a class='btn btn-success float-center' href='colorlib-regform-19/modifieremp.php?id_emp=".$row["id_emp"]."''>MODIFIER</a></td></tr></tr>";
    }
    echo "</table>";
  } else {
    echo '<p class="align-middle">La liste des employes est vide</p>';
  }
  $conn->close();

  echo '</div></div></div>';      
    ?>
  </tbody>
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