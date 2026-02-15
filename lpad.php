<?php include "../db.php";
$result = $conn->query("SELECT name, LPAD(name, 20, '*') AS padded FROM employees");
echo "<h3>LPAD() - Pads string on the left to a specified length</h3>";
echo "<table border='1'><tr><th>Name</th><th>Left Padded (20)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['padded']}</td></tr>";
}
echo "</table>";
?>
