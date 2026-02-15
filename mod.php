<?php include "../db.php";
$result = $conn->query("SELECT name, salary, MOD(salary, 10000) AS remainder FROM employees");
echo "<h3>MOD() - Returns the remainder of a division</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>MOD(salary, 10000)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['remainder']}</td></tr>";
}
echo "</table>";
?>
