<?php include "../db.php";
$result = $conn->query("SELECT TIME(NOW()) AS time_only");
echo "<h3>TIME() - Extracts the time portion from a datetime</h3>";
echo "<table border='1'><tr><th>TIME(NOW())</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['time_only']}</td></tr>";
echo "</table>";
?>
