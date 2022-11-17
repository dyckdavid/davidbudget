<?php
/*
Author: David Dyck
Website:
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `videos` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
	<head>
<title>Dashboard</title>
	
	<body>
    <link rel="stylesheet" href="style.css">
    <body>
        <header class="header">
            <nav class="navbar">
                <a href="/gbs-bibel-schule-2022/gbs/index.php" class="nav-logo">GBS-Bibelschule</a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/gbs-bibel-schule-2022/gbs/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gbs-bibel-schule-2022/gbs/videos.php" class="nav-link">All Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gbs-bibel-schule-2022/gbs/logins/index.php" class="nav-link">Admin</a>
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
<head>
<title>Edit</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>title:</label><input type="text" value="<?php echo $row['title']; ?>" name="title">
		<label>video:</label><input type="text" value="<?php echo $row['video']; ?>" name="video">
		<label>description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>