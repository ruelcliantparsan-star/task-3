<?php
include "../db.php";
echo "Connected: " . $conn->host_info . "<br>";
$result = $conn->query("SELECT CURRENT_USER()");
if ($result) {
    $row = $result->fetch_row();
    echo "Current User: " . $row[0];
} else {
    echo "Error: " . $conn->error;
}
?>