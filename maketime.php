<?php include "../db.php";
$result = $conn->query("SELECT MAKETIME(10, 30, 45) AS result");
echo "<h3>MAKETIME() - Creates a time from hour, minute, second values</h3>";
echo "<table border='1'><tr><th>MAKETIME(10, 30, 45)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
