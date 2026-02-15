<?php include "../db.php";
$result = $conn->query("SELECT name, salary, POWER(2, 10) AS result FROM employees LIMIT 1");
echo "<h3>POWER() - Same as POW(), returns value raised to a power</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>POWER(2, 10)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['result']}</td></tr>";
}
echo "</table>";
?>
