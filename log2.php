<?php include "../db.php";
$result = $conn->query("SELECT name, salary, LOG2(salary) AS log2_val FROM employees");
echo "<h3>LOG2() - Returns the base-2 logarithm of a number</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>LOG2(salary)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['log2_val']}</td></tr>";
}
echo "</table>";
?>
