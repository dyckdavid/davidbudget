<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	
	<center><a href="logout.php"><button class="button" style="vertical-align:middle"><span>Logout </span></button></a></center>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Firstname:</label><input type="text" name="title">
			<label>Lastname:</label><input type="text" name="video">
			<label>description:</label><input type="text" name="description">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Description</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `videos`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['video']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
	<script src="app.js"></script>
</html>?>