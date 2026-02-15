<?php include "../db.php";
$result = $conn->query("SELECT MAKEDATE(2026, 60) AS result");
echo "<h3>MAKEDATE() - Creates a date from a year and day-of-year value</h3>";
echo "<table border='1'><tr><th>MAKEDATE(2026, 60)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
