<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="producto.css">
    <title>Document</title>
</head>
<body>

<!--INSERTAR-->

<h1>PRODUCTOS</h1>
<form action="insertar.php" method="POST">
    <div>
        <label>CÓDIGO</label>
        <input type="text" name="CODIGO"/>
    </div>
    <div>
    <label>NOMBRE</label>
        <input type="text" name="NOMBRE"/>
    </div>
    <div>
    <label>REFERENCIA</label>
        <input type="text" name="REFERENCIA"/>
    </div>
    <div>
    <label>PRECIO</label>
        <input type="number" name="PRECIO"/>
    </div>
    <div>
    <label>DESCRIPCIÓN</label>
        <input type="text" name="DESCRIPCION"/>
    </div>
    <div>
    <label>TIPO PRODUCTO</label>
        <input type="text" name="TIPO"/>
    </div>
    <div>
    <label>IMAGEN</label>
        <input type="url" name="IMAGEN"/>
    </div>
    <button>Guardar</button>
</form>

<!--LISTAR-->

<table>
    <thead>
       <th>CÓDIGO</th>
       <th>NOMBRE</th>
       <th>REFERENCIA</th>
       <th>PRECIO</th>
       <th>DESCRIPCIÓN</th>
       <th>TIPO</th>
       <th>IMAGEN</th>
       <th>ACCIÓN</th>
    </thead>
    <tbody>

    <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                        <tr>
                            <td><?php  echo $row['CODIGO']?></td>
                            <td><?php  echo $row['NOMBRE']?></td>
                            <td><?php  echo $row['REFERENCIA']?></td>
                            <td><?php  echo $row['PRECIO']?></td>    
                            <td><?php  echo $row['DESCRIPCION']?></td>    
                            <td><?php  echo $row['TIPO']?></td> 
                            <td><img class="imagen" src="<?php  echo $row['IMAGEN']?>"/>   </td>  
                            <th><a href="actualizar.php?id=<?php echo $row['CODIGO'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['CODIGO'] ?>" class="btn btn-danger">Eliminar</a></th>                              
                        </tr>
                <?php 
                     }
                ?>

    </tbody>
</table>
    
</body>
</html>