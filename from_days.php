<?php include "../db.php";
$result = $conn->query("SELECT FROM_DAYS(738000) AS result");
echo "<h3>FROM_DAYS() - Returns a date from a numeric day value</h3>";
echo "<table border='1'><tr><th>FROM_DAYS(738000)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
