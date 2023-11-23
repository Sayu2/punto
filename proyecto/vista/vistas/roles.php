<!DOCTYPE html>
<html>
<head>
    <title>Insertar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://material.angular.io/components/menu/examples#menu-overview" rel="stylesheet">
</head>
<body>
    <div class="col-7 p-3">
    
<form action="../../DataAcces/DAO/UsuarioDAO.php" method="post">
<div class="form-group">
    <label class="col-sm-2 col-form-label-lg" for="name">Nombre:</label>
    <input class="form-control form-control-lg" type="text" name="nombre" id="name" required>
    <br>
    <label class="col-sm-2 col-form-label-lg" for="apellidoP">Apellido Paterno:</label>
    <input class="form-control form-control-lg" type="text" name="apellidoP" id="apellidoP" required>
    <br>
    <label class="col-sm-2 col-form-label-lg" for="apellidoM">Apellido Materno:</label>
    <input class="form-control form-control-lg" type="text" name="apellidoM" id="apellidoM" required>
    <br>
    <label class="col-sm-2 col-form-label-lg" for="telefono">Teléfono:</label>
    <input class="form-control form-control-lg" type="text" name="telefono" id="telefono" required>
    <br>
    <label class="col-sm-2 col-form-label-lg" for="email">Correo Electrónico:</label>
    <input class="form-control form-control-lg" type="email" name="email" id="email" required>
    <br>
    <label class="col-sm-2 col-form-label-lg" for="password">Contraseña:</label>
    <input class="form-control form-control-lg" type="password" name="contrasena" id="password" required>
    <br>
    
    <label class="col-sm-2 col-form-label-lg" for="rol">Rol:</label>
    <select class="form-select"  name="rol" id="rol">
    <option selected>Abre el menu para seleccionar</option>
        <option value="1">Administrador</option>
        <option value="2">Usuario</option>
        </select>
        <br>
        <label class="col-sm-2 col-form-label-lg" for="direccion">Direccion</label>
        <input class="form-control form-control-lg" type="text" name="direccion" id="direccion" required>
        <input  type="submit" value="Insertar">
</div>
</form>
</div>