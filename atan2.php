<?php include "../db.php";
$result = $conn->query("SELECT ATAN2(1, 1) AS result");
echo "<h3>ATAN2() - Returns arc tangent of two numbers</h3>";
echo "<table border='1'><tr><th>ATAN2(1, 1)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
