<?php include "../db.php";
$result = $conn->query("SELECT name, salary, LOG(10, salary) AS log_val FROM employees");
echo "<h3>LOG() - Returns the logarithm of a number to a specified base</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>LOG(10, salary)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['log_val']}</td></tr>";
}
echo "</table>";
?>
