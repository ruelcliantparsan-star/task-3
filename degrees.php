<?php include "../db.php";
$result = $conn->query("SELECT DEGREES(PI()) AS result");
echo "<h3>DEGREES() - Converts radians to degrees</h3>";
echo "<table border='1'><tr><th>DEGREES(PI())</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
