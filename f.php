<?php

function conectar(){
    $user="root";
    $pass="wq4DdZDwETEz";
    $server="localhost";
    $db="Estudiantes";
    $con=mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar".mysqli_error());
    mysqli_select_db($db,$con);
    return $con;
}

$cedula = $_POST['ced'];
$nombre = $_POST['nom'];
$apellido = $_POST['ape'];
$conn = conectar();

if($conn->connect_error){
    die("Conexion fallida: ". $conn->connect_error);
}
echo "Conexion exitosa";

$query = "INSERT INTO Estudiantes(ced, nom, ape) VALUES('$cedula','$nombre','$apellido')";

mysqli_query($conn,$query);

?>
