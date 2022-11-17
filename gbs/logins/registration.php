<?php
/*
Author: David Dyck
Website: 
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
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
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
	<p>Registerd already? <a href='login.php'>Login Here</a></p>

<?php } ?>
</body>
	<script src="app.js"></script>
</html>


