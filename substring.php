<?php
include "../db.php";
$result = $conn->query("SELECT SUBSTRING(name, 1, 5) AS result FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['result'] . "<br>";
}
?>