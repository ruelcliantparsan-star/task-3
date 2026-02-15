<?php include "../db.php";
$result = $conn->query("SELECT PERIOD_DIFF(202601, 202501) AS result");
echo "<h3>PERIOD_DIFF() - Returns difference between two periods in months</h3>";
echo "<table border='1'><tr><th>PERIOD_DIFF(202601, 202501)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
