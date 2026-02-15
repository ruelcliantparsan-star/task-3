<?php include "../db.php";
$result = $conn->query("SELECT ATAN(1) AS result");
echo "<h3>ATAN() - Returns arc tangent of a number</h3>";
echo "<table border='1'><tr><th>ATAN(1)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
