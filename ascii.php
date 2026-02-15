<?php include "../db.php";
$result = $conn->query("SELECT name, ASCII(name) AS ascii_val FROM employees");
echo "<h3>ASCII() - Returns ASCII value of first character</h3>";
echo "<table border='1'><tr><th>Name</th><th>ASCII Value</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['ascii_val']}</td></tr>";
}
echo "</table>";
?>
