<?php include "../db.php";
$result = $conn->query("SELECT STR_TO_DATE('January 15 2026', '%M %d %Y') AS result");
echo "<h3>STR_TO_DATE() - Converts a string to a date based on a format</h3>";
echo "<table border='1'><tr><th>STR_TO_DATE('January 15 2026', '%M %d %Y')</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
