<?php include "../db.php";
$result = $conn->query("SELECT name, LCASE(name) AS lower_name FROM employees");
echo "<h3>LCASE() - Converts string to lowercase (same as LOWER)</h3>";
echo "<table border='1'><tr><th>Original</th><th>Lowercase</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['lower_name']}</td></tr>";
}
echo "</table>";
?>
