<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign the submitted values to variables
    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $sem = $_POST["sem"];
    $sgpa = $_POST["sgpa"];
    $department = $_POST["department"];
    $phone_no = $_POST["phone_no"];

    // Create an SQL query to insert the submitted data into the STUDENT table
    $sql = "INSERT INTO STUDENT (USN, NAME, SEM, SGPA, DEPARTMENT, PHONE_NO)
            VALUES ('$usn', '$name', '$sem', '$sgpa', '$department', '$phone_no')";

    // Execute the SQL query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        // Display an alert message indicating that the record was inserted successfully
        echo "<script>alert('Record inserted successfully');</script>";
    } else {
        // Display an alert message indicating that there was an error inserting the record, and include the error message
        echo "<script>alert('Error inserting record: ". $conn->error."');</script>";
    }
}
?>
