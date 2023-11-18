<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postdb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image_data, image_name, title, date, pagelink FROM sourcecode ORDER BY date"; // Sort by date in ascending order and limit to 5 records
$result = $conn->query($sql);

$images = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row;
    }
}

$sql = "SELECT image_data1, image_name1, title1, date1 FROM csstutorial ORDER BY date1 ASC LIMIT 20"; // Sort by date in ascending order and limit to 5 records
$result = $conn->query($sql);

$imagess = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imagess[] = $row;
    }
}



$conn->close();
?>