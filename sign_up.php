<?php
// Connect to the database
include_once 'config.php' ;  // Include the configuration file to connect to the database

// Check if the form has been submitted
if (isset($_POST['submit'])) {  // Check if the submit button in the form has been clicked

  // Get the form values
  $username = $_POST['username'] ;  // Get the username from the form
  $password = $_POST['password'] ;  // Get the password from the form
  $confirm_password = $_POST['confirm_password'] ;  // Get the confirmed password from the form
  $first_name = $_POST['first_name'] ;  // Get the first name from the form
  $last_name = $_POST['last_name'] ;  // Get the last name from the form
  $email = $_POST['email'] ;  // Get the email from the form
  $phone = $_POST['phone'] ;  // Get the phone number from the form
  $department = $_POST['department'] ;  // Get the department from the form

  // Check if the passwords match
  if ($password != $confirm_password) {  // Check if the password and confirmed password match
    echo '<div class="alert alert-error">Passwords do not match</div>' ;  // Display an error message if they don't match
  } else {
    // Check if the username and email are already taken
    $sql = "SELECT * FROM teacher WHERE Username = '$username' OR Email = '$email'";  // Query to check if the username or email already exist in the database
    $result = $conn->query($sql);  // Execute the query
    if ($result->num_rows > 0) {  // Check if any rows were returned by the query
      echo '<center><div class="alert alert-error">Username or email already taken</div></center>' ;  // Display an error message if the username or email already exist
    } else {
      // Insert the values into the database
      $sql = "INSERT INTO teacher (Username,password, FirstName, LastName, Email, Phone, Department) VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$phone', '$department')" ;  // Query to insert the form data into the database
      $result = $conn->query($sql) ;  // Execute the query
      if ($result) {  // Check if the query was successful
        echo '<div class="alert">Thank you for signing up!</div>' ;  // Display a success message
        header("Location: login.php") ;  // Redirect the user to the login page
      } else {
        echo "Error creating account: ". $conn->error ;  // Display an error message if the query failed
      }
    }
  }
}
?>

<style>
  /* CSS styles for the page */
</style>

<div class="header">
  <a href="login.php" class="btn-login">Login</a> <!-- Link to the login page -->
</div>

<div class="container">
  <div class="header">
    <h2>Sign up</h2> <!-- Heading for the sign up page -->
  </div>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!-- Form to submit the sign up data -->
    <div class="form-group">
      <label for="username">Username:</label> <!-- Label for the username input field -->
      <input type="text" id="username" name="username" required> <!-- Input field for the username -->
    </div>
    <div class="form-group">
      <label for="password">Password:</label> <!-- Label for the password input field -->
      <input type="password" id="password" name="password" required> <!-- Input field for the password -->
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password:</label> <!-- Label for the confirmed password input field -->
      <input type="password" id="confirm_password" name="confirm_password" required> <!-- Input field for the confirmed password -->
    </div>
    <div class="form-group">
      <label for="first_name">First Name:</label> <!-- Label for the first name input field -->
      <input type="text" id="first_name" name="first_name" required> <!-- Input field for the first name -->
    </div>
    <div class="form-group">
      <label for="last_name">Last Name:</label> <!-- Label for the last name input field -->
      <input type="text" id="last_name" name="last_name" required> <!-- Input field for the last name -->
    </div>
    <div class="form-group">
      <label for="email">Email:</label> <!-- Label for the email input field -->
      <input type="email" id="email" name="email" required> <!-- Input field for the email -->
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label> <!-- Label for the phone input field -->
      <input type="tel" id="phone" name="phone" required> <!-- Input field for the phone number -->
    </div>
    <div class="form-group">
      <label for="department">Department:</label> <!-- Label for the department input field -->
      <input type="text" id="department" name="department" required> <!-- Input field for the department -->
    </div>
    <div class="form-group">
      <input type="submit" name="submit" value="Sign up"> <!-- Submit button for the sign up form -->
    </div>
  </form>
</div>

<?php
require_once 'footer.php' ; // Include the footer file
?>
