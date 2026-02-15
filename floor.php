<?php
include "../db.php";
$result = $conn->query("SELECT FLOOR(AVG(salary)) AS result FROM employees");
$row = $result->fetch_assoc();
echo "Floor of Average Salary: " . $row['result'];
?>