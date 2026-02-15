<?php include "../db.php";
$result = $conn->query("SELECT HOUR(NOW()) AS current_hour");
echo "<h3>HOUR() - Returns the hour part of a time/datetime</h3>";
echo "<table border='1'><tr><th>Current Hour</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['current_hour']}</td></tr>";
echo "</table>";
?>
