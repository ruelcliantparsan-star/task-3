<?php include "../db.php";
$result = $conn->query("SELECT SECOND(NOW()) AS current_second");
echo "<h3>SECOND() - Returns the seconds part of a time/datetime</h3>";
echo "<table border='1'><tr><th>Current Second</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['current_second']}</td></tr>";
echo "</table>";
?>
