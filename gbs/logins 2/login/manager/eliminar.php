<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?message=error');
        exit();
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM videos where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?message=deleted');
    } else {
        header('Location: index.php?message=error');
    }
    
?>