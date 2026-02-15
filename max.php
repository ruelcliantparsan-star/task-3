<?php
include "../db.php";
$result = $conn->query("SELECT MAX(salary) AS max_salary FROM employees");
$row = $result->fetch_assoc();
echo "Highest Salary: " . $row['max_salary'];
?>