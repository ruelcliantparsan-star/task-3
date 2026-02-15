<?php include "../db.php";
$result = $conn->query("SELECT name, CHAR_LENGTH(name) AS char_len FROM employees");
echo "<h3>CHAR_LENGTH() - Returns length of string in characters</h3>";
echo "<table border='1'><tr><th>Name</th><th>Char Length</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['char_len']}</td></tr>";
}
echo "</table>";
?>
