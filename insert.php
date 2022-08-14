<?php 

include_once "connexion-db.php";

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

}
?>