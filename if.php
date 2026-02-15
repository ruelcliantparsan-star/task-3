<?php include "../db.php";
$result = $conn->query("SELECT name, salary, IF(salary >= 60000, 'High', 'Low') AS salary_level FROM employees");
echo "<h3>IF() - Returns one value if condition is true, another if false</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>Level</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['salary_level']}</td></tr>";
}
echo "</table>";
?>
