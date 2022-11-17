<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `videos` where id='$id'");
	header('location:index.php');
?>