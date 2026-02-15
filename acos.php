<?php include "../db.php";
$result = $conn->query("SELECT ACOS(0.5) AS result");
echo "<h3>ACOS() - Returns arc cosine of a number</h3>";
echo "<table border='1'><tr><th>ACOS(0.5)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
