<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>GESTION clinique</title>
    
</head>
<body>
    <header>
        <h1>Gestion clinique</h1>
        <nav>
            <a href="#">Patient</a>
            <a href="#">Employer</a>
            <a href="#">Diagnostic</a>
            <a href="#">Dossier</a>
        </nav>
        <form action="#">
            <input type="text" name="search" placeholder="Recherche" class="search_input">
        </form>
    </header>
    <main>
        <section class="insert.php">
            <h1>Ajout d'un patient</h1>
            <form action="insert.php" method="POST">
                
                <div class="field">
                    <input type="text" name="prenom" placeholder="prenom" class="input_field">
                </div>
                <div class="field">
                    <input type="text" name="nom" placeholder="nom" class="input_field">
                </div>
                <div class="field">
                    <input type="text" name="adresse" placeholder="adresse" class="input_field">
                </div>
                <div class="field">
                    <input type="text" name="numtel" placeholder="numtel" class="input_field">
                </div>
                <div class="field">
                    <input type="number" name="age" placeholder="age" class="input_field">
                </div>
                <div class="field">
                    <input type="text" name="sexep" placeholder="sexep" class="input_field">
                </div>
                <input type="submit" value="Ajouter" class="btn btn_add">
            </form>
        </section>
        <section class="resultat">

        </section>
    </main>
    <?php 
if(isset($_POST["prenom"],$_POST["nom"],$_POST["adresse"],$_POST["numtel"],$_POST["age"],$_POST["sexep"])) {
    
    $prenom=$_POST["prenom"];
    $nom=$_POST["nom"];
    $adresse=$_POST["adresse"];
    $numtel=$_POST["numtel"];
    $age=$_POST["age"];
    $sexep=$_POST["sexep"];
    $req="INSERT INTO patient(prenom,nom,adresse,numtel,age,sexep) VALUES(?,?,?,?,?,?)";
    $result=$conn->prepare($req);
    $result->execute([$prenom,$nom,$adresse,$numtel,$age,$sexep]);
    header("location:inner-page.php");

 ?>
</body>
</html>

