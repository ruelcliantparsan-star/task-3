<?php include "../db.php";
$result = $conn->query("SELECT name, salary, FORMAT(salary, 2) AS formatted FROM employees");
echo "<h3>FORMAT() - Formats a number with commas and decimals</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>Formatted</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['formatted']}</td></tr>";
}
echo "</table>";
?>
