<?php include "../db.php";
$result = $conn->query("SELECT ADDTIME('2026-01-01 10:00:00', '02:30:00') AS result");
echo "<h3>ADDTIME() - Adds a time interval to a time/datetime</h3>";
echo "<table border='1'><tr><th>ADDTIME('2026-01-01 10:00:00', '02:30:00')</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
