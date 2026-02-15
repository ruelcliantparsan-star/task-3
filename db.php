<?php
$conn = new mysqli("localhost", "root",
       "", "task 3");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>