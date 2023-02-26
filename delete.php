<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM producto WHERE CODIGO='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
