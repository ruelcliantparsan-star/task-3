<?php
include '../db.php';

$sql = "SELECT NOW() AS now_time";
$result = $conn->query($sql);

if ($result === false) {
    die("SQL Error: " . $conn->error);
}

$row = $result->fetch_assoc();

echo "<h3>Current Date & Time</h3>";
echo $row['now_time'];
?>