<?php
include "../db.php";
$result = $conn->query("SELECT REPLACE(name, 'a', 'X') AS result FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['result'] . "<br>";
}
?>