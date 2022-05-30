<?php include ("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <a href="add.php" class="btn btn-lg btn-outline-primary">Agregar</a>


        <div class="table-responsive my-5">
            <table class="table table-hove align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Color</th>
                        <th scope="col">Modificar</th>
                    </tr>
                </thead>
                <tbody>
                   <?php                  
                   $sql = "SELECT * FROM macetas";
                   $result = mysqli_query($connection, $sql);
                   if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['bd_codigo'];
                        $categoria =$row['bd_categoria'];
                        $precio =$row['bd_precio'];
                        $cantidad = $row['bd_cantidad'];
                        $observaciones = $row['bd_observaciones'];
                        $tamano = $row['bd_tamano'];
                        $color = $row['bd_color'];
                 ?> 
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo  $precio; ?></td>
                        <td><?php echo $cantidad; ?></td>
                        <td><?php echo $observaciones ?></td>
                        <td><?php echo  $tamano ?></td>
                        <td><?php echo  $color ?></td>                      
                       
                        <td>
                        <a href="eliminar.php?deleteid=<?php echo $id ?>"
                         class="btn btn-outline-danger"
                         onclick="return confirmation()">
                         Eliminar</a>
                         
                        <a href="actualizar.php?updateid=<?php echo $id ?>"
                         class="btn  btn-outline-dark">Actualizar</a>
                       
                        </td>
                    </tr>                    
                    <?php
                }
                
                    } else {
                     echo "no hay ningun registro";}
                ?>
                </tbody>
            </table>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

<script >
  function confirmation(){
    if (confirm("¿Realmente desea eliminar el registro?")) {
      return true;
    }
    return false;
  }

</script>
</body>
</html>