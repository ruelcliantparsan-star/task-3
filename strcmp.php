<?php include "../db.php";
$result = $conn->query("SELECT name, STRCMP(name, 'Bob Smith') AS cmp FROM employees");
echo "<h3>STRCMP() - Compares two strings (0=equal, -1=less, 1=greater)</h3>";
echo "<table border='1'><tr><th>Name</th><th>Compare to 'Bob Smith'</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['cmp']}</td></tr>";
}
echo "</table>";
?>
