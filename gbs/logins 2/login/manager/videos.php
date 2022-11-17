<?php  
 $connect = mysqli_connect("localhost", "mennonitengemeinde", "192837aB?!,", "mennonitengemeinde");  
 $query = "SELECT * FROM videos ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?> 

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from videos");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBS-Bibelschule</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
    font-family: 'Roboto', sans-serif;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

.header{
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    z-index: 99999999;
}

.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color: #482ff7;
}

@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-item {
        margin: 2.5rem 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }

    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        -webkit-transform: translateY(8px) rotate(45deg);
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        -webkit-transform: translateY(-8px) rotate(-45deg);
        transform: translateY(-8px) rotate(-45deg);
    }
}

.button {
    
    border-radius: 4px;
    background-color: #482ff7;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    z-index: 0;
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }

.container {
    margin: auto;
  width: 90%;
  height: 500px;
  border: 3px solid rgb(161, 161, 161);
  padding: 10px;
  border-radius: 5px;
  background-color: rgb(232, 232, 232);
  
}

.title {
    text-align: center;
    font-size: 40px;
    color: #482ff7;
}

.iframe {
    width: 98%;
    align-items: center;
    height: 380px;
}

.description {
    font-size: 20px;
    color: #482ff7;
}
</style>
<body>
    <link rel="stylesheet" href="style.css">
    <body>
        <header class="header">
            <nav class="navbar">
                <a href="index.php" class="nav-logo">GBS-Bibelschule</a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="videos.php" class="nav-link">All Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="logins/login/manager/index.php" class="nav-link">Admin</a>
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

<?php 
                                foreach($persona as $dato){ 
                            ?> 
<br><br>
<div class="container">
    <div class="title">
        <p><?php echo $row["title"]; ?></p>
    </div>
    <div class="description">
            <center><iframe class="iframe" width="560" height="315" src="<?php echo $dato->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

        <p><?php echo $row["description"]; ?></p>
        <p><?php echo $dato->id; ?></p>
        <center><a href="vid.php?id=<?php echo $dato->id; ?>"><button class="" style="vertical-align:middle"><span>see </span></button></a></center>
    </div>
</div>
	<br><br>

	
	<?php }?>
<br><br>


<script src="app.js"></script>
</html>