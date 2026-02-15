<?php include "../db.php";
$result = $conn->query("SELECT name, RPAD(name, 20, '.') AS padded FROM employees");
echo "<h3>RPAD() - Pads string on the right to a specified length</h3>";
echo "<table border='1'><tr><th>Name</th><th>Right Padded (20)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['padded']}</td></tr>";
}
echo "</table>";
?>
