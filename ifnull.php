<?php
include "../db.php";
$result = $conn->query("SELECT name, IFNULL(department, 'Unknown') AS dept FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['dept'] . "<br>";
}
?>