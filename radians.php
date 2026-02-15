<?php include "../db.php";
$result = $conn->query("SELECT RADIANS(180) AS result");
echo "<h3>RADIANS() - Converts degrees to radians</h3>";
echo "<table border='1'><tr><th>RADIANS(180)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
