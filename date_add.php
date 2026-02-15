<?php
include "../db.php";
$result = $conn->query("SELECT name, DATE_ADD(hire_date, INTERVAL 30 DAY) AS new_date FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['new_date'] . "<br>";
}
?>