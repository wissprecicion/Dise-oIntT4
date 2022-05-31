<?php include ("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/MisEstilos.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png" />
    <style>
      #mainNav{
          background-color: rgba(154, 180, 75, 0.9) !important;/* --priamry-alpha: rgba(154, 180, 75, 0.9); */
      }
    </style>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-brand" href="index.html">
                <img src="assets/img/logo.png" alt="" width="50px" />
                Jardinería del Éden</a>
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
                        <a class="nav-link" href="#portfolio">Galería</a>
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
                    <h4 class="modal-title">Jardinería del Éden</h4>
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
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input type="password" id="inputPassword" class="form-control m-3 mx-auto"
                            placeholder="Contraseña" required="">

                        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="return validar()">
                  Ir </button> -->
                        <!-- doesnt working -->
                        <input type="button" class="btn btn-lg btn-primary btn-block" value="Ir"
                            onClick="return validar()">


                        <p class="mt-5 mb-3 text-muted">© 2019-2022</p>
                    </form>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>





    <!-- main -->
    <div class="container my-5">
        <a href="add.php" class="my-5 btn btn-lg btn-outline-primary">Agregar</a>


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
                            <a href="eliminar.php?deleteid=<?php echo $id ?>" class="btn btn-outline-danger"
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




    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Contactanos</h4>
                        <div class="contact_link_box">
                            <a href="https://goo.gl/maps/AFLsBTwAWwEGr1636" target="_blank">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Ubicación </span>
                            </a>
                            <a href="https://wa.me/527861015488/?text=Hola, ¿Qué tal?" target="_blank">
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
                        <a href="" class="footer-logo"> Jardinería del Éden </a>
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
                    <p>Todos los días</p>
                    <p>10.00 Am - 10.00 Pm</p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> Todos los derecho reservados -
                    <i>Jardinería del Éden</i>
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

    <script>
    function confirmation() {
        if (confirm("¿Realmente desea eliminar el registro?")) {
            return true;
        }
        return false;
    }
    </script>
</body>

</html>