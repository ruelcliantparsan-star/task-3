<?php include "../db.php";
$result = $conn->query("SELECT name, CONCAT(name, SPACE(5), department) AS spaced FROM employees");
echo "<h3>SPACE() - Returns a string of specified number of spaces</h3>";
echo "<table border='1'><tr><th>Name + 5 Spaces + Department</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['spaced']}</td></tr>";
}
echo "</table>";
?>
