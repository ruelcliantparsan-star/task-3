<?php
include "../db.php";
$result = $conn->query("SELECT name, LENGTH(name) AS total FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['total'] . " characters<br>";
}
?>