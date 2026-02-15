<?php
include "../db.php";
$result = $conn->query("SELECT MIN(salary) AS min_salary FROM employees");
$row = $result->fetch_assoc();
echo "Lowest Salary: " . $row['min_salary'];
?>