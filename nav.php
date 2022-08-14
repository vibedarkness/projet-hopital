<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cabinet Medical Gandiaye</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.3.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top p-3 mb-2 bg-success text-white" >
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light" style="margin-left: -70px;"><a href="index.php"><img src="th (4).jpg" alt="log" style="border-radius: 50%;height: 100px; width: 60px;"><span>Cabinet Gandiaye</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li style="color: white;"><a href="index.php">Acceuil</a></li>
          <li style="color: white;"><a href="inner-page.php">Patients</a></li>
          <li style="color: white;"><a href="employes.php">Employés</a></li>
          <li style="color: white;"><a href="pharmacie.php">Pharmacie</a></li>
          <li style="color: white;"><a href="colorlib-regform-19/formrap.php">Rapport</a></li>
          <li class="drop-down" style="color: white;"><a href="">Liste des Rapports</a>
            <ul>

            <?php 

                                     include('connexion-db.php');
                                    $query = "SELECT annee FROM rapport GROUP BY annee ORDER BY annee ";
                                    $result = $conn->query($query);
                                     while ($row = $result->fetch_assoc()){                       
                                        $annee=$row['annee']; 
             ?>
            
              <li class="drop-down"><a href="#"><?php  echo $annee;?> </a>
                <ul>
                            <?php 
                                    $query1 = 'SELECT mois  FROM rapport WHERE annee="'.$annee.'" GROUP BY mois ORDER BY mois';
                                    $result1 = $conn->query($query1);
                                     while ($row1 = $result1->fetch_assoc()){
                                        
                                        $mois=$row1['mois']; 
             ?>
                
                  <li>
                    <?php 
                    $moislettre='';

               switch ($mois) {
                  case 1:
                    $moislettre='janvier';
                    break;
                    case 2:
                    $moislettre='fevrier';
                    break;
                    case 3:
                    $moislettre='mars';
                    break;
                    case 4:
                    $moislettre='avril';
                    break;
                    case 5:
                    $moislettre='mai';
                    break;
                    case 6:
                    $moislettre='juin';
                    break;
                    case 7:
                    $moislettre='juillet';
                    break;
                    case 8:
                    $moislettre='Aout';
                    break;
                    case 9:
                    $moislettre='septembre';
                    break;
                    case 10:
                    $moislettre='octobre';
                    break;
                    case 11:
                    $moislettre='Novembre';
                    break;
                    case 12:
                    $moislettre='Decembre';
                    break;





                   
                  
                  default:
                    # code...
                    break;
                }

                     ?>
                    
                      <a href= <?php echo "rap.php?moiss=". $mois ."&annee=". $annee;?>><?php echo $moislettre ; ?></a></li>
                      

                    
                  
                  <?php } ?>
                  </ul>
                </li>
                </li>
                
                <?php } ?>
                </ul>
          <li style="background-color: red;"><?php
           include'Login_v1/deconnect.php'; 




           ?></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

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



       