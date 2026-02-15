<?php
include "../db.php";
$result = $conn->query("SELECT name, DATEDIFF(CURDATE(), hire_date) AS days FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['days'] . " days<br>";
}
?>