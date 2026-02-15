<?php include "../db.php";
$result = $conn->query("SELECT ASIN(0.5) AS result");
echo "<h3>ASIN() - Returns arc sine of a number</h3>";
echo "<table border='1'><tr><th>ASIN(0.5)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
