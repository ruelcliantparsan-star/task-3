<?php
include "../db.php";
$result = $conn->query("SELECT CEILING(AVG(salary)) AS result FROM employees");
$row = $result->fetch_assoc();
echo "Ceiling of Average Salary: " . $row['result'];
?>