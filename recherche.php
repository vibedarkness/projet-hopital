<!DOCTYPE html>
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



 <?php

     include('connexion-db.php');
     $nom = $_POST['requete'];

     $req = "SELECT * FROM employe WHERE nom_emp LIKE ? " ;
     $parm = "%";
     $param_term = $parm . $_REQUEST["requete"] . "%";
         if($stmt = mysqli_prepare($conn, $req)){
         
         mysqli_stmt_bind_param($stmt, "s", $param_term);
         if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);
        echo '<br><div class="table-header"><div class="card-header">Employes</div>';
        if(mysqli_num_rows($result) > 0): ?>
           <table class="table table-bordered">
    <tr><th>ID</th><th>NOM</th><th>PRENOM</th><th>AGE</th><th>ADRESSE</th><th>TELEPHONE</th><th>FONCTION</th><th>CNI</th><th>ACTION</th></tr>

           <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                <tr>
            <td><?php echo $row["id_emp"]; ?></td>
            <td><?php echo $row["nom_emp"]; ?></td>
            <td><?php echo $row["prenom_emp"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["adr_emp"]; ?></td>
            <td><?php echo $row["numtel_emp"]; ?></td>
            <td><?php echo $row["fonc_emp"]; ?></td>
            <td><?php echo $row["cni"]; ?></td>
            <td><a class='btn btn-warning float-center' style='background: green;' href='colorlib-regform-19/modifieremp.php?id_emp=".$row["id_emp"]."'>MODIFIER</a></td>                                  
            
          <?php  endwhile; ?>
         <?php echo "</table></div>"; ?>
        
        <?php endif; 
              }
            }
            ?>

             
            <a class='btn btn-success float-start' href="employes.php">employe</a>
            
          

    </body>
    
    </html>
        