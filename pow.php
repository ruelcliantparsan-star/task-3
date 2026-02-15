<?php include "../db.php";
$result = $conn->query("SELECT name, salary, POW(salary/10000, 2) AS squared FROM employees");
echo "<h3>POW() - Returns value raised to the power of another value</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>POW(salary/10000, 2)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['squared']}</td></tr>";
}
echo "</table>";
?>
