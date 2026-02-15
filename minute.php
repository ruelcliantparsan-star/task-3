<?php include "../db.php";
$result = $conn->query("SELECT MINUTE(NOW()) AS current_minute");
echo "<h3>MINUTE() - Returns the minute part of a time/datetime</h3>";
echo "<table border='1'><tr><th>Current Minute</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['current_minute']}</td></tr>";
echo "</table>";
?>
