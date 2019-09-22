<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: form.php"); // Redirecting To Home Page
}
?>
