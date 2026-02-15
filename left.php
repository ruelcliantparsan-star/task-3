<?php include "../db.php";
$result = $conn->query("SELECT name, LEFT(name, 5) AS first5 FROM employees");
echo "<h3>LEFT() - Extracts characters from the left of a string</h3>";
echo "<table border='1'><tr><th>Name</th><th>First 5 Chars</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['first5']}</td></tr>";
}
echo "</table>";
?>
