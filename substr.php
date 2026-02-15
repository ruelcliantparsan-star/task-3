<?php include "../db.php";
$result = $conn->query("SELECT name, SUBSTR(name, 1, 5) AS sub FROM employees");
echo "<h3>SUBSTR() - Extracts a substring (alias of SUBSTRING)</h3>";
echo "<table border='1'><tr><th>Name</th><th>SUBSTR(1,5)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['sub']}</td></tr>";
}
echo "</table>";
?>
