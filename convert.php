<?php include "../db.php";
$result = $conn->query("SELECT name, salary, CONVERT(salary, UNSIGNED) AS converted FROM employees");
echo "<h3>CONVERT() - Converts a value to a specified data type or character set</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>Converted (UNSIGNED)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['converted']}</td></tr>";
}
echo "</table>";
?>
