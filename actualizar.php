<?php 
include("connect.php");
$id=$_GET['updateid'];
/* refill the data */
$sql = "SELECT * FROM macetas WHERE bd_codigo=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$categoria =$row['bd_categoria'];
$precio =$row['bd_precio'];
$cantidad = $row['bd_cantidad'];
$observaciones = $row['bd_observaciones'];
$tamano = $row['bd_tamano'];
$color = $row['bd_color'];

if(isset($_POST['submit'])){
$categoria =$_POST['categoria'];
$precio =$_POST['precio'];
$cantidad = $_POST['cantidad'];
$observaciones = $_POST['observaciones'];
$tamano = $_POST['rad_tamano'];
$color = $_POST['color'];

$sql="UPDATE macetas SET bd_categoria='$categoria', bd_precio=$precio, bd_cantidad=$cantidad,
 bd_observaciones='$observaciones', bd_tamano='$tamano', bd_color='$color' WHERE bd_codigo=$id"; 
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
    <title>Inventario | Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png" />
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/MisEstilos.css">
    <style>
    .mb-3 {
        margin-bottom: 2.5rem !important;
    }
    #mainNav{
          background-color: rgba(154, 180, 75, 0.9) !important;/* --priamry-alpha: rgba(154, 180, 75, 0.9); */
      }
    </style>
</head>

<body>
    <div class="container my-5">
 <!-- nav -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-brand" href="index.html">
                <img src="assets/img/logo.png" alt="" width="50px" />
                Jardiner??a del ??den</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Galer??a</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about1">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Prodcutos</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Admin</a></li> -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Admin
                    </button>
                </ul>
            </div>
        </div>
    </nav>

    <!-- modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Jardiner??a del ??den</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="form-signin">
                        <div class="img-login mx-auto">
                            <img class="mb-4 img-fluid " src="assets/img/logo.png" alt="" width="120">
                        </div>
                        <h1 class="h3 mb-3 font-weight-normal">Por favor, introduce las credenciales</h1>
                        <!-- user -->
                        <label for="inputEmail" class="sr-only">Usuario</label>
                        <input type="text" id="inputEmail" class="form-control m-3 mx-auto" placeholder="Usuario"
                            required="" autofocus="">
                        <!-- password -->
                        <label for="inputPassword" class="sr-only">Contrase??a</label>
                        <input type="password" id="inputPassword" class="form-control m-3 mx-auto"
                            placeholder="Contrase??a" required="">

                        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="return validar()">
                  Ir </button> -->
                        <!-- doesnt working -->
                        <input type="button" class="btn btn-lg btn-primary btn-block" value="Ir"
                            onClick="return validar()">


                        <p class="mt-5 mb-3 text-muted">?? 2019-2022</p>
                    </form>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

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
                <input type="number" name="precio" class="form-control" id="precio" 
                aria-describedby="precio" required value=<?php echo $precio; ?>>
                <div id="precio" class="form-text">Introduce el precio $</div>
            </div>
            <!-- cantidad -->
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" aria-describedby="cantidad"
                value=<?php echo $cantidad; ?>  required>
                <div id="cantidad" class="form-text">Introduce la cantidad</div>
            </div>
            <!-- observaciones -->
            <div class="mb-3">
                <div class="form-floating mb-3">
                    <h6>Observaciones</h6>
                    <textarea class="form-control" name="observaciones" id="message" type="text"
                        placeholder="Escribe las observaciones..." style="height: 10rem"
                        value=<?php echo $observaciones; ?>></textarea>
                </div>
            </div>
            <!-- tama??o -->
            <div class="mb-3">
                <h6>Tama??o</h6>
                <div class="form-check">
                    <!-- chica -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="chica" value="Chica" required
                    value=<?php echo $tamano; ?> checked>
                    <label class="form-check-label" for="chica">
                        Chica
                    </label>
                </div>
                <div class="form-check">
                    <!-- mediano -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="mediana" value="Mediana"
                    value=<?php echo $tamano;?>   required>
                    <label class="form-check-label" for=" mediana">
                        Mediana
                    </label>
                </div>
                <div class="form-check">
                    <!-- grande -->
                    <input class="form-check-input" type="radio" name="rad_tamano" id="grande" value="Grande"
                    value=<?php echo $tamano;?> required>
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
                <select name="color" id="color" class="form-select"  required>
                    <option value=""></option>                     
                    <option value="Negro">Negro</option>
                    <option value="Marr??n">Marr??n</option>
                    <option value="Blanco">Blanco</option>
                </select>
            </div>
            <!-- enviar -->
            <button type="submit" class="btn btn-lg btn-primary" name="submit">Actualizar</button>
        </form>
    </div>
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Contactanos</h4>
                        <div class="contact_link_box">
                            <a href="https://goo.gl/maps/AFLsBTwAWwEGr1636" target="_blank">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Ubicaci??n </span>
                            </a>
                            <a href="https://wa.me/527861015488/?text=Hola, ??Qu?? tal?" target="_blank">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span> Llama +52 786 1015488 </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> jardinera.eden@gmail.com </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo"> Jardiner??a del ??den </a>
                        <p>Vive tu vida, vive tus plantas</p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>Horario</h4>
                    <p>Todos los d??as</p>
                    <p>10.00 Am - 10.00 Pm</p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> Todos los derecho reservados -
                    <i>Jardiner??a del ??den</i>
                    <!-- <a href="https://html.design/">Free Html Templates</a><br><br> -->
                    <!--   &copy; <span id="displayYear"></span> Distributed By
              <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> -->
                </p>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
 
 <script src="https://kit.fontawesome.com/0c7e5557d4.js" crossorigin="anonymous"></script>

</body>
</html>