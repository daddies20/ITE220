<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
$_SESSION['login_user']=$username;
header("Location: index.php"); // Redirecting To Home Page
}
?>

