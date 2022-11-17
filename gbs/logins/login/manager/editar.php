<?php
/*
Author: David Dyck
Website:
*/
 

include("auth.php"); //include auth.php file on all secure pages ?>


<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="./gbs/logins/css.css">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <body>
        <header class="header">
            <nav class="navbar">
                <a href="/gbs/index.php" class="nav-logo">GBS-Bibelschule</a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/gbs/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gbs/videos.php" class="nav-link">All Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gbs/logins/login/manager/index.php" class="nav-link">Admin</a>
                    </li>
                    
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
    </body>
    
</body>
	
</head>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?message=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from videos where id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Edit Listings:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">title: </label>
                        <input type="text" class="form-control" name="title" required 
                        value="<?php echo $persona->title; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">video: </label>
                        <input type="text" class="form-control" name="video" autofocus required
                        value="<?php echo $persona->video; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description: </label>
                        <input type="text" class="form-control" name="description" autofocus required
                        value="<?php echo $persona->description; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="app.js"></script>
