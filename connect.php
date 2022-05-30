<?php 
 $db_host = 'localhost';	  // Servidor donde está alojada la base de datos
 $db_user = 'root';		  // Usuario de la base de datos
 $db_password = '';		  // Contraseña de la base de datos
 $db_name = 'inventario';	      // Nombre de la base de datos
 $db_port = '3306';
 $connection =mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);

 /* checking if evertg goes ok */
if ($connection) 
    echo  "Connection succesful";
     else 
    die(mysqli_error($connection))

    


?>