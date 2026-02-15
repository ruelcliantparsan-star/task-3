<?php include "../db.php";
$result = $conn->query("SELECT name, UCASE(name) AS upper_name FROM employees");
echo "<h3>UCASE() - Converts string to uppercase (same as UPPER)</h3>";
echo "<table border='1'><tr><th>Original</th><th>Uppercase</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['upper_name']}</td></tr>";
}
echo "</table>";
?>
