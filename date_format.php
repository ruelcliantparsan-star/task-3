<?php include "../db.php";
$result = $conn->query("SELECT name, DATE_FORMAT(hire_date, '%M %d, %Y') AS formatted FROM employees");
echo "<h3>DATE_FORMAT() - Formats a date value based on a format string</h3>";
echo "<table border='1'><tr><th>Name</th><th>Formatted Date</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['formatted']}</td></tr>";
}
echo "</table>";
?>
