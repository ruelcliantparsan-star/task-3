<?php include "../db.php";
$result = $conn->query("SELECT name, salary, ABS(salary - 60000) AS diff FROM employees");
echo "<h3>ABS() - Returns absolute value</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>ABS(salary - 60000)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['diff']}</td></tr>";
}
echo "</table>";
?>
