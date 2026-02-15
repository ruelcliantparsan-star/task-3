<?php include "../db.php";
$result = $conn->query("SELECT name, salary, LOG10(salary) AS log10_val FROM employees");
echo "<h3>LOG10() - Returns the base-10 logarithm of a number</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>LOG10(salary)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['log10_val']}</td></tr>";
}
echo "</table>";
?>
