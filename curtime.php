<?php include "../db.php";
$result = $conn->query("SELECT CURTIME() AS cur_time");
echo "<h3>CURTIME() - Returns the current time</h3>";
echo "<table border='1'><tr><th>Current Time</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['cur_time']}</td></tr>";
echo "</table>";
?>
