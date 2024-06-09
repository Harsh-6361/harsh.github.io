<?php  // Starting a PHP script
// ****************************************
// Configuration
// These variables hold the database connection details
$servername = "localhost";    // The server name where the database is hosted
$username = "root";          // The username to access the database
$password = ""               // The password for the above username
$dbname = "test";            // The name of the database to connect to

// ****************************************
// Create connection
// A new connection to the database is created using the configuration variables
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// ****************************************
// Check connection
// The 'connect_error' property of the connection object is checked to see if the connection was successful
if ($conn->connect_error) {
    // If there was an error, the error message is displayed and the script stops executing
    die("Connection failed: ". $conn->connect_error);
}
?>
