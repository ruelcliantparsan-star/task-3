<?php include "../db.php";
$result = $conn->query("SELECT LOCALTIME() AS local_time");
echo "<h3>LOCALTIME() - Returns current local date and time</h3>";
echo "<table border='1'><tr><th>Local Time</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['local_time']}</td></tr>";
echo "</table>";
?>
