<?php
include "../db.php";
$result = $conn->query("SELECT LOWER(name) AS result FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['result'] . "<br>";
}
?>