<?php include "../db.php";
$result = $conn->query("SELECT name, RIGHT(name, 5) AS last5 FROM employees");
echo "<h3>RIGHT() - Extracts characters from the right of a string</h3>";
echo "<table border='1'><tr><th>Name</th><th>Last 5 Chars</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['last5']}</td></tr>";
}
echo "</table>";
?>
