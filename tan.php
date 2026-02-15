<?php include "../db.php";
$result = $conn->query("SELECT TAN(PI()/4) AS result");
echo "<h3>TAN() - Returns tangent of a number (in radians)</h3>";
echo "<table border='1'><tr><th>TAN(PI()/4)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
