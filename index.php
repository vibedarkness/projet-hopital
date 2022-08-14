<?php
session_start();
include 'sylla.php';


if (!$_SESSION['username']) {
                            
            header('location:login_v1/index.php');
       
    }

?>

<?php  
$url="http://api.openweathermap.org/data/2.5/weather?q=Dakar&lang=fr&units=metric&appid=1c7458c06a3c7125999d880cd3f428de";
$rec=file_get_contents($url);
$vibe=json_decode($rec);
//var_dump($vibe);

$nom=$vibe->name;
//echo $nom;

$temp=$vibe->weather[0]->main;
$descrip=$vibe->weather[0]->description;
//echo $temp." ".$descrip;

$deg=$vibe->main->temp;
$feels=$vibe->main->feels_like;

//echo $deg." ".$feels;
$vit=$vibe->wind->speed;
$degre=$vibe->wind->deg;


?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.5.1.slim.min.js" ></script>
    <script src="bootstrap.bundle.min.js" ></script>
<style>
  .container h1{
    color: white;
    font-weight: lighter;
    text-transform: uppercase;
  }
  .meteo_desc h2{
    color: white;
    font-weight: lighter;
  }
  
  .icon {
  position: relative;
  display: inline-block;
  width: 12em;
  height: 10em;
  font-size: 1em; /* control icon size here */
}

.cloud {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  width: 3.6875em;
  height: 3.6875em;
  margin: -1.84375em;
  background: currentColor;
  border-radius: 50%;
  box-shadow:
    -2.1875em 0.6875em 0 -0.6875em,
    2.0625em 0.9375em 0 -0.9375em,
    0 0 0 0.375em #fff,
    -2.1875em 0.6875em 0 -0.3125em #fff,
    2.0625em 0.9375em 0 -0.5625em #fff;
}
.cloud:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: -0.5em;
  display: block;
  width: 4.5625em;
  height: 1em;
  background: currentColor;
  box-shadow: 0 0.4375em 0 -0.0625em #fff;
}
.cloud:nth-child(2) {
  z-index: 0;
  background: #fff;
  box-shadow:
    -2.1875em 0.6875em 0 -0.6875em #fff,
    2.0625em 0.9375em 0 -0.9375em #fff,
    0 0 0 0.375em #fff,
    -2.1875em 0.6875em 0 -0.3125em #fff,
    2.0625em 0.9375em 0 -0.5625em #fff;
  opacity: 0.3;
  transform: scale(0.5) translate(6em, -3em);
  animation: cloud 4s linear infinite;
}
.cloud:nth-child(2):after { background: #fff; }

.sun {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 2.5em;
  height: 2.5em;
  margin: -1.25em;
  background: currentColor;
  border-radius: 50%;
  box-shadow: 0 0 0 0.375em #fff;
  animation: spin 12s infinite linear;
}
.rays {
  position: absolute;
  top: -2em;
  left: 50%;
  display: block;
  width: 0.375em;
  height: 1.125em;
  margin-left: -0.1875em;
  background: #fff;
  border-radius: 0.25em;
  box-shadow: 0 5.375em #fff;
}
.rays:before,
.rays:after {
  content: '';
  position: absolute;
  top: 0em;
  left: 0em;
  display: block;
  width: 0.375em;
  height: 1.125em;
  transform: rotate(60deg);
  transform-origin: 50% 3.25em;
  background: #fff;
  border-radius: 0.25em;
  box-shadow: 0 5.375em #fff;
}
.rays:before {
  transform: rotate(120deg);
}
.cloud + .sun {
  margin: -2em 1em;
}

.rain,
.lightning,
.snow {
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  width: 3.75em;
  height: 3.75em;
  margin: 0.375em 0 0 -2em;
  background: currentColor;
}

.rain:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  width: 1.125em;
  height: 1.125em;
  margin: -1em 0 0 -0.25em;
  background: #0cf;
  border-radius: 100% 0 60% 50% / 60% 0 100% 50%;
  box-shadow:
    0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
    -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
    -1.375em -0.125em 0 rgba(255,255,255,0.2);
  transform: rotate(-28deg);
  animation: rain 3s linear infinite;
}

.bolt {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.25em 0 0 -0.125em;
  color: #fff;
  opacity: 0.3;
  animation: lightning 2s linear infinite;
}
.bolt:nth-child(2) {
  width: 0.5em;
  height: 0.25em;
  margin: -1.75em 0 0 -1.875em;
  transform: translate(2.5em, 2.25em);
  opacity: 0.2;
  animation: lightning 1.5s linear infinite;
}
.bolt:before,
.bolt:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 50%;
  left: 50%;
  margin: -1.625em 0 0 -1.0125em;
  border-top: 1.25em solid transparent;
  border-right: 0.75em solid;
  border-bottom: 0.75em solid;
  border-left: 0.5em solid transparent;
  transform: skewX(-10deg);
}
.bolt:after {
  margin: -0.25em 0 0 -0.25em;
  border-top: 0.75em solid;
  border-right: 0.5em solid transparent;
  border-bottom: 1.25em solid transparent;
  border-left: 0.75em solid;
  transform: skewX(-10deg);
}
.bolt:nth-child(2):before {
  margin: -0.75em 0 0 -0.5em;
  border-top: 0.625em solid transparent;
  border-right: 0.375em solid;
  border-bottom: 0.375em solid;
  border-left: 0.25em solid transparent;
}
.bolt:nth-child(2):after {
  margin: -0.125em 0 0 -0.125em;
  border-top: 0.375em solid;
  border-right: 0.25em solid transparent;
  border-bottom: 0.625em solid transparent;
  border-left: 0.375em solid;
}

.flake:before,
.flake:after {
  content: '\2744';
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -1.025em 0 0 -1.0125em;
  color: #fff;
  list-height: 1em;
  opacity: 0.2;
  animation: spin 8s linear infinite reverse;
}
.flake:after {
  margin: 0.125em 0 0 -1em;
  font-size: 1.5em;
  opacity: 0.4;
  animation: spin 14s linear infinite;
}
.flake:nth-child(2):before {
  margin: -0.5em 0 0 0.25em;
  font-size: 1.25em;
  opacity: 0.2;
  animation: spin 10s linear infinite;
}
.flake:nth-child(2):after {
  margin: 0.375em 0 0 0.125em;
  font-size: 2em;
  opacity: 0.4;
  animation: spin 16s linear infinite reverse;
}


/* Animations */ 

@keyframes spin {
  100% { transform: rotate(360deg); }
}

@keyframes cloud {
  0% { opacity: 0; }
  50% { opacity: 0.3; }
  100% {
    opacity: 0;
    transform: scale(0.5) translate(-200%, -3em);
  }
}

@keyframes rain {
  0% {
    background: #0cf;
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 #0cf;
  }
  25% {
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em #0cf,
      -1.375em -0.125em 0 rgba(255,255,255,0.2);
  }
  50% {
    background: rgba(255,255,255,0.3);
    box-shadow:
      0.625em 0.875em 0 -0.125em #0cf,
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 rgba(255,255,255,0.2);
  }
  100% {
    box-shadow:
      0.625em 0.875em 0 -0.125em rgba(255,255,255,0.2),
      -0.875em 1.125em 0 -0.125em rgba(255,255,255,0.2),
      -1.375em -0.125em 0 #0cf;
  }
}

@keyframes lightning {
  45% {
    color: #fff;
    background: #fff;
    opacity: 0.2;
  }
  50% {
    color: #0cf;
    background: #0cf;
    opacity: 1;
  }
  55% {
    color: #fff;
    background: #fff;
    opacity: 0.2;
  }
}
</style>

<body>
  <section id="hero">
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="container text-left py-5" style="position: right;">
    <h3 style="color: black;">Meteo du jour à<strong> <?php echo $nom;?> </strong></h3>

    <div class="row justify-content-right align-items-right">
      <?php 
      switch ($temp) {
        case 'Clear':
        ?>
        <div class="icon sunny">
          <div class="sun">
            <div class="rays"></div>
          </div>
        </div>

        <?php 

        break;

        case 'Drizzle':
        ?>
        <div class="icon sun-shower">
          <div class="cloud">
            <div class="sun">
            <div class="rays"></div>
            </div>
            <div class="rain"></div>
          </div>
        </div>

        <?php 

        break;

        case 'Rain':
        ?>
        <div class="icon rainy">
          <div class="cloud"></div>
          <div class="rain"></div>
          
        </div>

        <?php 

        break;


        case 'Clouds':
        ?>
        <div class="icon cloudy">
          <div class="cloud"></div>
          <div class="cloud"></div>
          
        </div>

        <?php 

        break;

        case 'Thunderstorm':
        ?>
        <div class="icon thunder-storm">
          <div class="cloud">
            <div class="lightning">
              <div class="bolt"></div>
              <div class="bolt"></div>
            </div>
          </div>
        </div>

        <?php 

        break;

        case 'Snow':
        ?>
        <div class="icon flurries">
          <div class="cloud">
            <div class="snow">
              <div class="flake"></div>
              <div class="flake"></div>
            </div>
          </div>
        </div>

        <?php 

        break;
         ?>
    <?php 
      }
       ?>

       <div class="meteo_desc text-left">
        
        <h2 style="color: black;">
          <?php echo $deg; ?> °C / Ressenti <?php echo $feels; ?> °C <br> 
          <?php echo $vit; ?> Km/h - <?php echo $degre; ?> ° <br>
          <?php echo $descrip; ?>
        </h2>
       </div>
    </div>


    
  </div><br><br>

<?php include 'nav.php'; ?>

  <!-- ======= Hero Section ======= -->
  
    <div class="hero-container" data-aos="fade-up">
       <br><br><br><br><h1 style="color: green;">Cabinet Medical Yaye Fatou Ndiaye</h1>
      <br><br><br><br><h2 style="color: blue;">Docteur Wally Ndiaye</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

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