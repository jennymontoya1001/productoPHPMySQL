<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM producto WHERE CODIGO='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MODIFICAR PRODUCTOS</h1>
<form action="update.php" method="POST">
    <div>
        <label>CÓDIGO</label>
        <input type="text" name="CODIGO" value="<?php echo $row['CODIGO']  ?>"/>
    </div>
    <div>
    <label>NOMBRE</label>
        <input type="text" name="NOMBRE" value="<?php echo $row['NOMBRE']  ?>"/>
    </div>
    <div>
    <label>REFERENCIA</label>
        <input type="text" name="REFERENCIA" value="<?php echo $row['REFERENCIA']  ?>"/>
    </div>
    <div>
    <label>PRECIO</label>
        <input type="number" name="PRECIO" value="<?php echo $row['PRECIO']  ?>"/>
    </div>
    <div>
    <label>DESCRIPCIÓN</label>
        <input type="text" name="DESCRIPCION" value="<?php echo $row['DESCRIPCION']  ?>"/>
    </div>
    <div>
    <label>TIPO PRODUCTO</label>
        <input type="text" name="TIPO" value="<?php echo $row['TIPO']  ?>"/>
    </div>
    <div>
    <label>IMAGEN</label>
        <input type="url" name="IMAGEN" value="<?php echo $row['IMAGEN']  ?>"/>
    </div>
    <button>Actualizar</button>
</form>
    
</body>
</html>