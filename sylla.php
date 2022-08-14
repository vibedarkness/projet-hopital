<?php  
$host='localhost';
$base='clinique';
$pass='';
$user='root';


try{
$pdo=new PDO('mysql:host='.$host.';dbname='.$base,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING ));
}catch(PDOException $e){
	die("une erreur de connexion");
}


?>
