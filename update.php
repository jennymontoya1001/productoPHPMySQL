<?php

include("conexion.php");
$con=conectar();

$CODIGO=$_POST['CODIGO'];
$NOMBRE=$_POST['NOMBRE'];
$REFERENCIA=$_POST['REFERENCIA'];
$PRECIO=$_POST['PRECIO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$TIPO=$_POST['TIPO'];
$IMAGEN=$_POST['IMAGEN'];

$sql="UPDATE producto SET  CODIGO='$CODIGO',NOMBRE='$NOMBRE',REFERENCIA='$REFERENCIA',
 PRECIO='$PRECIO', DESCRIPCION='$DESCRIPCION', TIPO='$TIPO', IMAGEN='$IMAGEN' 
 WHERE CODIGO='$CODIGO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
