<?php include "../db.php";
$result = $conn->query("SELECT EXP(1) AS result");
echo "<h3>EXP() - Returns e raised to the power of a number</h3>";
echo "<table border='1'><tr><th>EXP(1)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
