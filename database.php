<?php include "../db.php";
$result = $conn->query("SELECT DATABASE() AS db_name");
echo "<h3>DATABASE() - Returns the name of the current database</h3>";
echo "<table border='1'><tr><th>Current Database</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['db_name']}</td></tr>";
echo "</table>";
?>
