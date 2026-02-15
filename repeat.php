<?php include "../db.php";
$result = $conn->query("SELECT name, REPEAT(LEFT(name,1), 5) AS repeated FROM employees");
echo "<h3>REPEAT() - Repeats a string a specified number of times</h3>";
echo "<table border='1'><tr><th>Name</th><th>First Letter Repeated 5x</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['repeated']}</td></tr>";
}
echo "</table>";
?>
