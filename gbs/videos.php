<?php  
 $connect = mysqli_connect("localhost", "mennonitengemeinde", "192837aB?!,", "mennonitengemeinde");  
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
    body {
  background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100% 50% 95%;
  
  color: white;
  z-index: 0;
}

@media only screen and (max-width: 768px) {
    body {
        background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 200% 100% 50% 95%;
  
  color: white;
  z-index: 0;
    }
</style>
<body>
    <link rel="stylesheet" href="style.css">
    <body>
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
    </body>
    
</body>

<?php  
		
		
                               while($row = mysqli_fetch_assoc($result))  
                               {  
								   $image=$row['videos'];
                               ?> 
<br><br>
<div class="container">
    <div class="title">
        <p><?php echo $row["title"]; ?></p>
    </div>
    <center><iframe class="iframe" width="560" height="315" src="<?php echo $row["video"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    <div class="description">
        <p><?php echo $row["description"]; ?></p>
    </div>
</div>
	<br><br>

	
	<?php }?>
<br><br>


<script src="app.js"></script>
</html>