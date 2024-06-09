<?php 
// Include the configuration file
require_once 'config.php';

// Check if the 'edit' GET parameter is set
if (isset($_GET["edit"])) {
    // Assign the 'edit' GET parameter to the variable $usn
    $usn = $_GET["edit"];

    // Create a SQL query to select all records from the STUDENT table where the USN matches the $usn variable
    $sql = "SELECT * FROM STUDENT WHERE USN = '$usn'";

    // Execute the query using the $conn connection object
    $result = $conn->query($sql);

    // Fetch the associated row from the result set
    $row = $result->fetch_assoc();

    // Display the edit form
    echo "<div style='text-align: center;'>" . PHP_EOL;
    echo "<form method='post' style='background-color: #f0f0f0; padding: 20px; border: 1px solid #ddd; border-radius: 10px; width: 50%; margin: 0 auto;'>" . PHP_EOL;
    echo "<h2 style='color: #337ab7;'>Edit Student Details</h2>" . PHP_EOL;
    echo "<label for='usn' style='color: #337ab7;'>USN:</label>" . PHP_EOL;
    echo "<input type='hidden' name='usn' value='" . $row["USN"] . "'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<label for='name' style='color: #337ab7;'>Name:</label>" . PHP_EOL;
    echo "<input type='text' name='name' value='" . $row["NAME"] . "' style='width: 100%; height: 30px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<label for='sem' style='color: #337ab7;'>Sem:</label>" . PHP_EOL;
    echo "<input type='number' name='sem' value='" . $row["SEM"] . "' style='width: 100%; height: 30px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<label for='sgpa' style='color: #337ab7;'>SGPA:</label>" . PHP_EOL;
    echo "<input type='number' name='sgpa' value='" . $row["SGPA"] . "' step='any' style='width: 100%; height: 30px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<label for='department' style='color: #337ab7;'>Department:</label>" . PHP_EOL;
    echo "<input type='text' name='department' value='" . $row["DEPARTMENT"] . "' style='width: 100%; height: 30px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<label for='phone_no' style='color: #337ab7;'>Phone No:</label>" . PHP_EOL;
    echo "<input type='number' name='phone_no' value='" . $row["PHONE_NO"] . "' style='width: 100%; height: 30px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" . PHP_EOL;
    echo "<br>" . PHP_EOL;
    echo "<input type='submit' name='update' value='Update' style='background-color: #337ab7; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;'>" . PHP_EOL;
    echo "</form>" . PHP_EOL;
    echo "</div>" . PHP_EOL;
}
?>
