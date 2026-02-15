<?php
include '../db.php';

$sql = "SELECT COUNT(*) AS total_employees FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Total Employees</h3>";
echo $row['total_employees'];
?>