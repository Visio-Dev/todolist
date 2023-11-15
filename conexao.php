<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "todolist";



$mysqli = new mysqli($host, $user, $pass, $db); // precisa ser nessa sequencia
if ($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados! (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
?>