<?php

$server     = "localhost:3306";    // Change this to correspond with your database port
$username   = "root";              // Change if use webhost online
$password   = "";
$DB         = "Appointment";    // database name

$conn = new mysqli($server, $username, $password, $DB);    // Check database connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT Status FROM current";    // Select status and fan columns
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["Status"];    // Echo status and fan values separated by comma
} else {
    echo "0 results";
}

$conn->close();

?>
