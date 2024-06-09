<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>Login</title>    
</head>
<body>
    <!-- Navigation bar -->
    <nav style="background-color: #337ab7; padding: 10px; text-align: right;">
        <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="sgpa.html" style="color: #fff; text-decoration: none;">SGPA Calculator</a></button> 
        <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="sign_up.php" style="color: #fff; text-decoration: none;">Sign Up</a></button> 
    </nav>

    <?php  
    // login.php  
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $dbname = "test";   
    $conn = new mysqli($servername, $username, $password, $dbname, 3307); // Create a new connection to the database
    if($conn->connect_error) { // Check if the connection failed
        die("Connection failed".$conn->connect_error);  
    }  

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form was submitted
        $username = $_POST["username"]; // Get the username from the form
        $password = $_POST["password"]; // Get the password from the form

        $sql = "SELECT * FROM teacher WHERE username='$username' AND password='$password'"; // Create a SQL query to check if the credentials are valid
        $result = $conn->query($sql); // Execute the query

        if ($result->num_rows > 0) { // Check if the query returned any results
            // Credentials are valid, start the session and redirect to index.php
            session_start(); // Start the session
            $_SESSION['username'] = $username; // Store the username in the session
            header("Location: index.php"); // Redirect to index.php
            exit; // Stop the script
        } else { // Credentials are invalid
            // Display an alert box with an error message
            echo "<script>alert('Invalid username or password');</script>";  
        }  
    } 

    $conn->close(); // Close the connection to the database
?>

    <!-- Login form -->
    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h1>Login</h1> <!-- Title of the form -->
        <h3>Please enter your username and password.</h3> <!-- Instructions for the user -->
        <hr> <!-- Horizontal rule for visual separation -->

        <label for="username">Username:</label> <!-- Label for the username input -->
        <input type="text" id="username" name="username" required><br><br> <!-- Input field for the username -->

        <label for="password">Password:</label> <!-- Label for the password input -->
        <input type="password" id="password" name="password" required><br><br> <!-- Input field for the password -->

        <input type="submit" value="Login"> <!-- Submit button for the form -->
    </form>

    <style>
        form {
            border: 1px solid #ccc;
            padding: 20px;
            width: 30%;
            margin: 40px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label(
        {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="password"]{
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        input[type="submit"]{
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover(
        {
            background-color: #3e8e41;
        }
    </style>


    <?php
    require_once 'footer.php'; // Include the footer
    ?>
</body>
</html>
