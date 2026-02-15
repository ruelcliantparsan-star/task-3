<?php include "../db.php";
$result = $conn->query("SELECT name, CHARACTER_LENGTH(name) AS char_len FROM employees");
echo "<h3>CHARACTER_LENGTH() - Same as CHAR_LENGTH()</h3>";
echo "<table border='1'><tr><th>Name</th><th>Length</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['char_len']}</td></tr>";
}
echo "</table>";
?>
