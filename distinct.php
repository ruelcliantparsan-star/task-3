<?php
include "../db.php";
$result = $conn->query("SELECT DISTINCT department FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['department'] . "<br>";
}
?>