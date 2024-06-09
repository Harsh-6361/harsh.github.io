<?php  <?php starts the PHP script. ?>

session_start();  <?php Starts the session. This function must appear before any output is sent to the browser.?>

require_once 'config.php';  <?php Includes and evaluates the specified file once. If the file cannot be found, an E_COMPILE_ERROR level error will be thrown.?>

if (!isset($_SESSION['username'])){  <?php Checks if the session variable 'username' is not set. If not set, redirects the user to the login page.?>
    header('Location: login.php');
    exit;
}

?>

<nav style="background-color: #337ab7; padding: 10px; text-align: right;">  <?php Defines the navigation bar with a blue background color and right-aligned text.?>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="my_profile.php" style="color: #fff; text-decoration: none;">My Profile</a></button>  <?php Creates a button for the user's profile.?>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="display_records.php" style="color: #fff; text-decoration: none;">View Inserted Records</a></button>  <?php Creates a button for viewing inserted records.?>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="sgpa.html" style="color: #fff; text-decoration: none;">SGPA Calculator</a></button>  <?php Creates a button for the SGPA calculator.?>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"><a href="logout.php" style="color: #fff; text-decoration: none;">Logout</a></button>  <?php Creates a button for logging out.?>
</nav>

<center>  <?php Centers the content.?>
<h1 style='color: #337ab7; font-weight: bold;'>  <?php Defines the heading with a blue color and bold font weight.?>
  <marquee behavior="scroll" direction="left">Student Records Management System</marquee>  <?php Creates a scrolling marquee with the system's name.?>
</h1>
<hr>  <?php Defines a horizontal rule.?>
<h2>ENTER THE DETAILS</h2>  <?php Defines the subheading for entering details.?>
<div style='background-color: #f9f9f9; padding: 20px; width: 500px; background-color:light_black; height:250px; border: 5px solid #ddd;'>  <?php Defines a div with a light gray background color, padding, width, height, and border.?>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">  <?php Defines a form with the action attribute set to the current script and the method attribute set to post.?>
    <label for="usn" style='color: #666;'>USN:</label><!--pattern="[1-9][A-Z][A-Z][0-9][0-9][A-Z][A-Z][0-9][0-9][0-9]"--><?php Defines a label for the USN input field. The pattern attribute is commented out.?>
    <input type="text" id="usn" name="usn" title="Enter USN 1SP" style='width: 30%; height: 20px; border: 1px solid #ccc; padding: 5px; text-transform: uppercase;' required><br><br>  <?php Defines the USN input field with a width, height, border, padding, and text transform property. The required attribute ensures that the user enters a value.?>
    <label for="name" style='color: #666;'>Name:</label>  <?php Defines a label for the name input field.?>
    <input type="text" id="name" name="name" style='width: 30%; height: 20px; border: 1px solid #ccc; padding: 5px;'><br><br>  <?php Defines the name input field with a width, height, border, and padding.>
    <label for="sem" style='color: #666;'>Sem:</label>  <?php Defines a label for the semester input field.?>
    <input type="number" id="sem" name="sem" min="1" max="8" style='width: 30%; height: 20px; border: 1px solid #ccc; padding: 5px;' required><br><br>  <?php Defines the semester input field with a width, height, border, padding, and minimum and maximum values. The required attribute ensures that the user enters a value.>
    <label for="sgpa" style='color: #666;'>SGPA:</label>  <?php Defines a label for the SGPA input field.>
<input type="number" id="sgpa" name="sgpa" min="0.00" max="10.00" step="0.01" style='width: 30%; height: 20px; border: 1px solid #ccc; padding: 5px;'><br><br><label for="department" style='color: #666;'>Department:</label>  <?php Defines a label for the department input field.>
    <input type="text" id="department" name="department" style='width: 27%; height: 20px; border: 1px solid #ccc; padding: 5px;'><br><br>  <?php Defines the department input field with a width, height, border, and padding.>
    <label for="phone_no" style='color: #666;'>Phone No:</label>  <?php Defines a label for the phone number input field.>
    <input type="number" id="phone_no" name="phone_no" style='width: 30%; height: 20px; border: 1px solid #ccc; padding: 5px;'><br><br>  <?php Defines the phone number input field with a width, height, border, and padding.>
    <input type="submit" name="submit" value="Submit" style='background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;'>  <?php Defines the submit button with a blue background color, white text color, padding, and border radius.>
  </form>  <?php Closes the form.?>
</div>  <?php Closes the div.>
</center>  <?php Closes the center tag.>

<?php  <?php Starts the PHP script.?>
if ($_SERVER["REQUEST_METHOD"] == "POST"){  <?php Checks if the request method is post. If true, includes and evaluates the insert_record.php file.?>
    require_once 'insert_record.php';
}
?>

<?php  <?php Starts the PHP script.?>
require_once 'footer.php';  <?php Includes and evaluates the footer.php file.?>
?>
