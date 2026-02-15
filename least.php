<?php include "../db.php";
$result = $conn->query("SELECT name, salary, LEAST(salary, 60000) AS result FROM employees");
echo "<h3>LEAST() - Returns the smallest value in a list</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>LEAST(salary, 60000)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['result']}</td></tr>";
}
echo "</table>";
?>
