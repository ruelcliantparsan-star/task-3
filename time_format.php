<?php include "../db.php";
$result = $conn->query("SELECT TIME_FORMAT(NOW(), '%h:%i %p') AS formatted");
echo "<h3>TIME_FORMAT() - Formats a time value</h3>";
echo "<table border='1'><tr><th>TIME_FORMAT(NOW(), '%h:%i %p')</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['formatted']}</td></tr>";
echo "</table>";
?>
