<?php include "../db.php";
$result = $conn->query("SELECT VERSION() AS mysql_version");
echo "<h3>VERSION() - Returns the current MySQL version</h3>";
echo "<table border='1'><tr><th>MySQL Version</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['mysql_version']}</td></tr>";
echo "</table>";
?>
