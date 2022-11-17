<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?message=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id'];
    $title = $_POST['title'];
    $video = $_POST['video'];
    $description = $_POST['description'];

    $sentencia = $bd->prepare("UPDATE videos SET title = ?, video = ?, description = ? where id = ?;");
    $resultado = $sentencia->execute([$title, $video, $description, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?message=edited');
    } else {
        header('Location: index.php?message=error');
        exit();
    }
    
?>