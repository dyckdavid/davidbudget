<?php
/*
Author: David Dyck
Website: 
*/

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>