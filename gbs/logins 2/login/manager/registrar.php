<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["title"]) || empty($_POST["video"]) || empty($_POST["description"])){
        header('Location: index.php?message=fail');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["title"];
    $edad = $_POST["video"];
    $signo = $_POST["description"];
    
    $sentencia = $bd->prepare("INSERT INTO videos(title,video,description) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$signo]);

    if ($resultado === TRUE) {
        header('Location: index.php?message=added');
    } else {
        header('Location: index.php?message=error');
        exit();
    }
    
?>