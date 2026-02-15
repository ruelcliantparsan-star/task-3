<?php include "../db.php";
$result = $conn->query("SELECT name, salary, LN(salary) AS ln_val FROM employees");
echo "<h3>LN() - Returns the natural logarithm of a number</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>LN(salary)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['ln_val']}</td></tr>";
}
echo "</table>";
?>
