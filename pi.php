<?php include "../db.php";
$result = $conn->query("SELECT PI() AS pi_value");
echo "<h3>PI() - Returns the value of PI</h3>";
echo "<table border='1'><tr><th>PI()</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['pi_value']}</td></tr>";
echo "</table>";
?>
