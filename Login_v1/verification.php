<?php
session_start();
include '../sylla.php';


if (isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if ($username !== "" && $password !== "") {
        $query =$pdo->prepare("SELECT * FROM user WHERE username=? 
  and password=?") ;
        $query->execute(array($username,$password));
  
        if ($query->rowCount()) {
            $user= $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['username'] = $username;                     
               header('Location: ../index.php');
        } 
        else {
            header('Location: index.php?erreur=1');
        }
    } 
    else {
        header('Location: index.php?erreur=2');
    }
}
?>