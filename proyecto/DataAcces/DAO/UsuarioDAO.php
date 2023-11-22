
<?php


session_start();

if(isset($_SESSION['user_id'])){
    header("Location: ../../vista/vistas/inicio.php");
}

require_once "../conection/conection.php";

function nuevoUsuario($conexion, $nombre, $apellidoP, $apellidoM, $telefono, $email, $contrasena, $direccion,$rol){

    //Escapar caracteres especiales en los datos de entrada para evitar ataques de inyección SQL
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $apellidoP = mysqli_real_escape_string($conexion, $apellidoP);
    $apellidoM = mysqli_real_escape_string($conexion, $apellidoM);
    $telefono = mysqli_real_escape_string($conexion, $telefono);
    $email = mysqli_real_escape_string($conexion, $email);
    $contrasena = mysqli_real_escape_string($conexion, $contrasena);
    $direccion = mysqli_real_escape_string($conexion, $direccion);
    $rol= mysqli_real_escape_string($conexion,$rol);

    //Hashing la contraseña antes de guardarla en la base de datos
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    //Insertar los datos del nuevo usuario en la base de datos
    $query = "INSERT INTO usuario (nombre, apellidoP, apellidoM, telefono, email, contrasena, direccion, id_rolperm) 
              VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono', '$email', '$contrasena', '$direccion','$rol')";
    $resultado = mysqli_query($conexion, $query);

    //Verificar si la consulta fue exitosa
    if($resultado){
        return 
        header("Location: ../../vista/vistas/inicio.php");
    } else {
        return false;
        header("Location: ../../vista/vistas/inicio.php");
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];

    //$conexion = conectarDB();

    if(nuevoUsuario($conexion, $nombre, $apellidoP, $apellidoM, $telefono, $email, $contrasena, $direccion, $rol)){
        header("Location: ../../vista/vistas/inicio.php");
    } else {
        header("Location: ../../vista/vistas/inicio.php");
    }

    desconectarDB($conexion);
}

?>



    



