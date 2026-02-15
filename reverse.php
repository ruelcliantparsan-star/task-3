<?php include "../db.php";
$result = $conn->query("SELECT name, REVERSE(name) AS reversed FROM employees");
echo "<h3>REVERSE() - Reverses a string</h3>";
echo "<table border='1'><tr><th>Name</th><th>Reversed</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['reversed']}</td></tr>";
}
echo "</table>";
?>
