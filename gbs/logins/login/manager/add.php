<?php
/*
Author: David Dyck
Website: 
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<?php
	include('conn.php');
	
	$firstname=$_POST['title'];
	$lastname=$_POST['video'];
	$address=$_POST['description'];
		
	mysqli_query($conn,"insert into `videos` (title,video,description) values ('$firstname','$lastname','$address')");
	header('location:index.php');
	
?>