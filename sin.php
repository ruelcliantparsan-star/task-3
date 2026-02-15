<?php include "../db.php";
$result = $conn->query("SELECT SIN(PI()/2) AS result");
echo "<h3>SIN() - Returns sine of a number (in radians)</h3>";
echo "<table border='1'><tr><th>SIN(PI()/2)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
