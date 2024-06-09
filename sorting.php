<?php
// Include the configuration file
require_once 'config.php';

// Display sorting options
echo "<div style='text-align: center;'>" ;
echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='get'>" ;
echo "<label for='sort_by' style='color: #337ab7;'>Sort by:</label>" ;
// Display sorting options for each column in the table
echo "<select id='sort_by' name='sort_by' style='width: 150px; height: 40px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" ;
echo "<option value='USN' style='background-color: #f0f0f0;'>USN</option>" ;
echo "<option value='NAME' style='background-color: #f0f0f0;'>Name</option>" ;
echo "<option value='SEM' style='background-color: #f0f0f0;'>Sem</option>" ;
echo "<option value='SGPA' style='background-color: #f0f0f0;'>SGPA</option>" ;
echo "<option value='DEPARTMENT' style='background-color: #f0f0f0;'>Department</option>" ;
echo "<option value='PHONE_NO' style='background-color: #f0f0f0;'>Phone No</option>" ;
echo "</select>" ;
// Display order options for sorting
echo "<label for='order' style='color: #337ab7;'>Order:</label>" ;
echo "<select id='order' name='order' style='width: 150px; height: 40px; border: 1px solid #ddd; border-radius: 5px; padding: 10px;'>" ;
echo "<option value='ASC' style='background-color: #f0f0f0;'>Ascending</option>" ;
echo "<option value='DESC' style='background-color: #f0f0f0;'>Descending</option>" ;
echo "</select>" ;
echo "<input type='submit' value='Sort' style='background-color: #337ab7; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;'>" ;
echo "</form>" ;
echo "</div>" ;

// Sort the records
if (isset($_GET["sort_by"]) && isset($_GET["order"])) {
    $sort_by = $_GET["sort_by"];
    $order = $_GET["order"];
    // Convert the sort_by value to decimal to ensure proper sorting
    $sql = "SELECT * FROM STUDENT ORDER BY CONVERT($sort_by, DECIMAL(4,2)) $order";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div style='text-align: center;'>" ;
        echo "<table style='margin: 0 auto; border-collapse: collapse;'>" ;
        echo "<tr style='background-color: #f0f0f0;'>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>USN</th>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>Name</th>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>Sem</th>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>SGPA</th>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>Department</th>" ;
        echo "<th style='border: 1px solid #ddd; padding: 10px;'>Phone No</th>" ;
        echo "</tr>" ;
        // Display each row of the sorted result set
        while ($row = $result->fetch_assoc()) {
            echo "<tr style='background-color: #fff;'>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["USN"] . "</td>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["NAME"] . "</td>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["SEM"] . "</td>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["SGPA"] . "</td>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["DEPARTMENT"] . "</td>" ;
            echo "<td style='border: 1px solid #ddd; padding: 10px;'>" . $row["PHONE_NO"] . "</td>" ;
            echo "</tr>" ;
        }
        echo "</table>" ;
        echo "</div>" ;
    } else {
        echo "No records found" ;
    }
}
?>
