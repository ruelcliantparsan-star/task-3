<?php
include '../db.php';

$sql = "SELECT SUM(salary) AS total_salary FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Total Salary</h3>";
echo $row['total_salary'];
?>