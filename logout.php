<?php  // Starting a PHP session.
session_start();

session_destroy();  // Destroying the current session.

header('Location: login.php');  // Redirecting the user to the login page.

exit;  // Terminating the current script.
?>
