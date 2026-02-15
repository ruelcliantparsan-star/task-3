<?php
include "../db.php";
$result = $conn->query("SELECT name, MONTH(hire_date) AS month FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['month'] . "<br>";
}
?>