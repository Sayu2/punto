<?php
require_once "../conection/conection.php";

function rol($conexion, $nombre, $descripcion){
    try {
        $conexion->beginTransaction();
        $sql = "INSERT INTO rol (nombre, descripcion) VALUES (:nombre, :descripcion)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->execute();
        $conexion->commit();
        return header("Location: ../../vista/vistas/inicio.php");;
    } catch (PDOException $e) {
        $conexion->rollBack();
        return "Error: " . $e->getMessage();
    }
}

?>