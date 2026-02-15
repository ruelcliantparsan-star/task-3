<?php
include "../db.php";
$result = $conn->query("SELECT department, COUNT(*) AS total FROM employees GROUP BY department");
while ($row = $result->fetch_assoc()) {
    echo $row['department'] . " - " . $row['total'] . "<br>";
}
?>