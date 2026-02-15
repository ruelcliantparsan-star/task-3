<?php include "../db.php";
$result = $conn->query("SELECT name, salary, CAST(salary AS UNSIGNED) AS int_salary FROM employees");
echo "<h3>CAST() - Converts a value to a specified data type</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary (decimal)</th><th>CAST as INT</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['int_salary']}</td></tr>";
}
echo "</table>";
?>
