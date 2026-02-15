<?php include "../db.php";
$result = $conn->query("SELECT name, INSERT(name, 1, 5, 'XXXXX') AS modified FROM employees");
echo "<h3>INSERT() - Inserts a string within another string</h3>";
echo "<table border='1'><tr><th>Original Name</th><th>Modified</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['modified']}</td></tr>";
}
echo "</table>";
?>
