<?php include "../db.php";
$result = $conn->query("SELECT CURRENT_TIME() AS now_time");
echo "<h3>CURRENT_TIME() - Returns the current time</h3>";
echo "<table border='1'><tr><th>Current Time</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['now_time']}</td></tr>";
echo "</table>";
?>
