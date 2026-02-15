<?php include "../db.php";
$result = $conn->query("SELECT LAST_INSERT_ID() AS last_id");
echo "<h3>LAST_INSERT_ID() - Returns the AUTO_INCREMENT id of the last inserted row</h3>";
echo "<table border='1'><tr><th>Last Insert ID</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['last_id']}</td></tr>";
echo "</table>";
?>
