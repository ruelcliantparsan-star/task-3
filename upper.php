<?php
include '../db.php';

$sql = "SELECT UPPER(name) AS upper_name FROM employees";
$result = $conn->query($sql);

echo "<h3>UPPER() Function Output</h3>";
while ($row = $result->fetch_assoc()) {
    echo $row['upper_name'] . "<br>";
}
?>