<?php include "../db.php";
$result = $conn->query("SELECT MICROSECOND('2026-01-01 10:30:45.123456') AS result");
echo "<h3>MICROSECOND() - Returns microseconds part of a time/datetime</h3>";
echo "<table border='1'><tr><th>Microseconds</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
