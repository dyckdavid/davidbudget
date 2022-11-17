<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$firstname=$_POST['title'];
	$lastname=$_POST['video'];
	$description=$_POST['description'];
	
	
	mysqli_query($conn,"update `videos` set title='$firstname', video='$lastname', description='$description' where id='$id'");
	header('location:index.php');
?>