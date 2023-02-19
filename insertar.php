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


$sql="INSERT INTO producto VALUES('$CODIGO','$NOMBRE','$REFERENCIA','$PRECIO','$DESCRIPCION',
'$TIPO','$IMAGEN')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
    $echo('Error inesperado');
}
?>