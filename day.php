<?php
include "../db.php";
$result = $conn->query("SELECT name, DAY(hire_date) AS day FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['day'] . "<br>";
}
?>