<?php include "../db.php";
$result = $conn->query("SELECT CURRENT_TIMESTAMP() AS ts");
echo "<h3>CURRENT_TIMESTAMP() - Returns the current date and time</h3>";
echo "<table border='1'><tr><th>Current Timestamp</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['ts']}</td></tr>";
echo "</table>";
?>
