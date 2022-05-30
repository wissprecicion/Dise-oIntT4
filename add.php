<?php 
include("connect.php");
if(isset($_POST['submit'])){
$categoria =$_POST['categoria'];
$precio =$_POST['precio'];
$cantidad = $_POST['cantidad'];
$observaciones = $_POST['observaciones'];
$tamano = $_POST['rad_tamano'];
$color = $_POST['color'];

$sql="INSERT INTO macetas (bd_codigo, bd_categoria, bd_precio, bd_cantidad, bd_observaciones, bd_tamano, bd_color)
VALUES (NULL, '$categoria', $precio, $cantidad, '$observaciones', '$tamano', '$color')"; 
$result = mysqli_query($connection,$sql);
echo $sql;
if ($result){
    header('location:display');/* redirecionar */
    echo "Data inserted successfully";
}else {
    die(mysqli_error($connection));
}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invetario | Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .mb-3 {
        margin-bottom: 2.5rem !important;
    }
    </style>
</head>

<body>
    <div class="container my-5">
        <p class="display-1">Llena los campos</p>
        <form method="post">
            <!-- categoria -->
            <div class="mb-3">
                <label for="categoria" class="form-label">
                    categoria
                </label>
                <select name="categoria" id="categoria" class="form-select" required>
                    <option value=""></option>
                    <option value="Maceta 501">Maceta 501</option>
                    <option value="Maceta curva conica">Maceta curva conica</option>
                    <option value="Tipo madera">Tipo madera</option>>
                </select>
            </div>
            <!-- precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" id="precio" aria-describedby="precio" required>
                <div id="precio" class="form-text">Introduce el precio $</div>
            </div>
            <!-- cantidad -->
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" aria-describedby="cantidad"
                    required>
                <div id="cantidad" class="form-text">Introduce la cantidad</div>
            </div>
            <!-- observaciones -->
            <div class="mb-3">
                <div class="form-floating mb-3">
                    <h6>Observaciones</h6>
                    <textarea class="form-control" name="observaciones" id="message" type="text"
                        placeholder="Escribe las observaciones..." style="height: 10rem"></textarea>
                </div>
            </div>
            <!-- tamaño -->
            <div class="mb-3">
                <h6>Tamaño</h6>
                <div class="form-check">
                    <!-- chica -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="chica" value="Chica" required
                        checked>
                    <label class="form-check-label" for="chica">
                        Chica
                    </label>
                </div>
                <div class="form-check">
                    <!-- mediano -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="mediana" value="Mediana"
                        required>
                    <label class="form-check-label" for=" mediana">
                        Mediana
                    </label>
                </div>
                <div class="form-check">
                    <!-- grande -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="grande" value="Grande" required>
                    <label class="form-check-label" for=" grande">
                        Grande
                    </label>
                </div>
            </div>
            <!-- color -->
            <div class="mb-3">
                <label for="color" class="form-label">
                    Color
                </label>
                <select name="color" id="color" class="form-select" required>
                    <option value=""></option>
                    <option value="Negro">Negro</option>
                    <option value="Marrón">Marrón</option>
                    <option value="Blanco">Blanco</option>
                </select>
            </div>
            <!-- enviar -->
            <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
</html>