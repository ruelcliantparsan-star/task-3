<?php include "../db.php";
$result = $conn->query("SELECT PERIOD_ADD(202601, 3) AS result");
echo "<h3>PERIOD_ADD() - Adds months to a period (YYMM or YYYYMM)</h3>";
echo "<table border='1'><tr><th>PERIOD_ADD(202601, 3)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
