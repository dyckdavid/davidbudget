<?php
/*

*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" />
</head>
	<head>
<title>Dashboard</title>
	
	<body>
    <link rel="stylesheet" href="style.css">
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
                        <a href="/gbs/logins/index.php" class="nav-link">Admin</a>
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
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />

</div>
<?php } ?>


</body>
	<script src="app.js"></script>
</html>


