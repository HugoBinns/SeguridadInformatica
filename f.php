<?php

function conectar(){
    $user="root";
    $pass="wq4DdZDwETEz";
    $server="104.215.122.167/phpmyadmin";
    $db="Estudiantes";
    $con=mysql_connect($server,$user,$pass) or die ("Error al conectar".mysql_error());
    mysql_select_db($db,$con);
    return $con;
}

$cedula = $_POST['ced'];
$nombre = $_POST['nom'];
$apellido = $_POST['ape'];

mysql_query($con,("INSERT INTO Estudiantes(ced, nom, ape) VALUES('$cedula','$nombre','$apellido')"));

?>
