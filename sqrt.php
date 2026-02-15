<?php include "../db.php";
$result = $conn->query("SELECT name, salary, SQRT(salary) AS sqrt_val FROM employees");
echo "<h3>SQRT() - Returns square root of a number</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>SQRT(salary)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['sqrt_val']}</td></tr>";
}
echo "</table>";
?>
