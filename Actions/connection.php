<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="todolist";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connexion échoué".$conn->connect_error);
}
?>