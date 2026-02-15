<?php include "../db.php";
$result = $conn->query("SELECT COT(1) AS result");
echo "<h3>COT() - Returns cotangent of a number</h3>";
echo "<table border='1'><tr><th>COT(1)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
