<?php
if(!empty($_POST["submit"])){
    if (empty($_POST["username"]) and empty(["password"])) {
        echo '<div class= "alert alert-danger">los campos estan vacios</div>';
    } else {
       $usuario=$_POST["username"];
       $clave=$_POST["password"];
       $sql=$conexion->query("select * from usuario where email = '$usuario' and telefono = '$clave' ");
       if ($datos=$sql->fetch_object()) {
        header("location:inicio.php");
       } else {
        echo '<div class="alert alert-danger" >los datos no existen</div>';
       }
       
    }
    
}
?>
