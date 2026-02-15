<?php include "../db.php";
$result = $conn->query("SELECT name, salary, TRUNCATE(salary, -3) AS truncated FROM employees");
echo "<h3>TRUNCATE() - Truncates a number to specified decimal places</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>TRUNCATE(salary, -3)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['truncated']}</td></tr>";
}
echo "</table>";
?>
