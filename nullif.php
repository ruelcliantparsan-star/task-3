<?php include "../db.php";
$result = $conn->query("SELECT name, department, NULLIF(department, 'IT') AS result FROM employees");
echo "<h3>NULLIF() - Returns NULL if two expressions are equal, else first expression</h3>";
echo "<table border='1'><tr><th>Name</th><th>Department</th><th>NULLIF(dept, 'IT')</th></tr>";
while ($row = $result->fetch_assoc()) {
    $val = $row['result'] ?? 'NULL';
    echo "<tr><td>{$row['name']}</td><td>{$row['department']}</td><td>{$val}</td></tr>";
}
echo "</table>";
?>
