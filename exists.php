<?php
include "../db.php";
$result = $conn->query("
    SELECT name FROM employees
    WHERE EXISTS (SELECT 1 FROM employees WHERE salary > 75000)
");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
?>