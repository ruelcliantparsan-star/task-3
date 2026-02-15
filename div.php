<?php include "../db.php";
$result = $conn->query("SELECT name, salary, salary DIV 1000 AS thousands FROM employees");
echo "<h3>DIV - Integer division</h3>";
echo "<table border='1'><tr><th>Name</th><th>Salary</th><th>Salary DIV 1000</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['thousands']}</td></tr>";
}
echo "</table>";
?>
