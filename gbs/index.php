<?php  
 $connect = mysqli_connect("localhost", "gbs", "192837aB?!,", "gbs");  
 $query = "SELECT * FROM videos ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
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
    .background {
  background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100% 50% 95%;
  
  color: white;
  z-index: 0;
}
@media only screen and (max-width: 768px) {
    .background {
        background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 221% 100% 50% 95%;
  
  color: white;
  z-index: 0;
    }
</style>
<body>
    <link rel="stylesheet" href="style.css">
    
        <header class="header" style="background-color: #fff;">
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
   
  <body class="background">  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="videos.php"><button class="button" style="vertical-align:middle"><span>VIDEOS </span></button></a></center>
</body>
<script src="app.js"></script>
</body>
</html>