<?php include "../db.php";
$result = $conn->query("SELECT COS(0) AS result");
echo "<h3>COS() - Returns cosine of a number (in radians)</h3>";
echo "<table border='1'><tr><th>COS(0)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
