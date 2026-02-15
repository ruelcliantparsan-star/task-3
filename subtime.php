<?php include "../db.php";
$result = $conn->query("SELECT SUBTIME('2026-01-01 12:00:00', '02:30:00') AS result");
echo "<h3>SUBTIME() - Subtracts a time from a time/datetime</h3>";
echo "<table border='1'><tr><th>SUBTIME('2026-01-01 12:00:00', '02:30:00')</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
