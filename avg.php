<?php
include '../db.php';

$sql = "SELECT AVG(salary) AS avg_salary FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Average Salary</h3>";
echo $row['avg_salary'];
?>