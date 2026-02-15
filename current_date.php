<?php include "../db.php";
$result = $conn->query("SELECT CURRENT_DATE() AS today");
echo "<h3>CURRENT_DATE() - Returns the current date</h3>";
echo "<table border='1'><tr><th>Today</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['today']}</td></tr>";
echo "</table>";
?>
