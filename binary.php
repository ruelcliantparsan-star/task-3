<?php include "../db.php";
$result = $conn->query("SELECT name, BINARY name = 'alice johnson' AS case_sensitive FROM employees");
echo "<h3>BINARY - Converts value to binary string for case-sensitive comparison</h3>";
echo "<table border='1'><tr><th>Name</th><th>Equals 'alice johnson' (case-sensitive)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['case_sensitive']}</td></tr>";
}
echo "</table>";
?>
