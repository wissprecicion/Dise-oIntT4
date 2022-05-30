<?php 
include("connect.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM macetas WHERE bd_codigo= $id";
    $result = mysqli_query($connection, $sql);
    if($result){
   /*  echo "Deleted successfull"; */
   header('location:display.php');
    }else{
        die(mysqli_error($connection));
    }

}
?>