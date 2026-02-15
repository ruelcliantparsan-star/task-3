<?php
include "../db.php";
$result = $conn->query("SELECT ROUND(salary, -3) AS rounded FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['rounded'] . "<br>";
}
?>