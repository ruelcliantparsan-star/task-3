<?php include "../db.php";
$result = $conn->query("SELECT TIMEDIFF('2026-01-01 12:00:00', '2026-01-01 08:30:00') AS result");
echo "<h3>TIMEDIFF() - Returns the difference between two time/datetime values</h3>";
echo "<table border='1'><tr><th>Difference</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
