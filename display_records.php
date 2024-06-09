<nav style="background-color: #337ab7; padding: 10px; text-align: right;">
  <!-- Navigation buttons for My Profile, Insert Record, SGPA Calculator, and Logout -->
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
    <a href="my_profile.php" style="color: #fff; text-decoration: none;">My Profile</a>
  </button>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
    <a href="index.php" style="color: #fff; text-decoration: none;">Insert Record</a>
  </button>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
    <a href="sgpa.html" style="color: #fff; text-decoration: none;">SGPA Calculator</a>
  </button>
  <button style="background-color: #337ab7; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
    <a href="logout.php" style="color: #fff; text-decoration: none;">Logout</a>
  </button>
  <br></br>
</nav>

<style>
  .back-button{
    <!-- Style for the back button -->
    position: absolute;
    top: 60px; /* adjust this value to position the button below the nav buttons*/
    left: 10px;
    background-color: #337ab7;
    color: #fff;
    border: none;
    border-radius: 50%; /* add this to make the button circular*/
    padding: 10px 20px;
    cursor: pointer;
    width: 30px; /* set a fixed width to make the button circular*/
    height: 30px; /* set a fixed height to make the button circular*/
    text-align: center; /* center the text horizontally*/
    line-height: 30px; /* center the text vertically*/
  }
</style>

<a href="#" class="back-button" onclick="goBack()"><<</a>

<script>
  function goBack() {
    <!-- Function to go back to the previous page -->
    window.history.back();
  }
</script>

<?php

require_once 'config.php'; // Include the configuration file
require_once 'update_record.php'; // Include the update_record.php file

// Check if the delete button is clicked
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete"])) {
    $usn = $_GET["delete"];
    $sql = "DELETE FROM STUDENT WHERE USN = '$usn'"; // SQL query to delete a record
    $conn->query($sql);
    header("Location: display_records.php");
    exit;
}

// Display the records
$sql = "SELECT * FROM STUDENT"; // SQL query to select all records from the STUDENT table
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='margin: 0 auto; border-collapse: collapse;'>"
