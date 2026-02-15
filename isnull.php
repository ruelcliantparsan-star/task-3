<?php include "../db.php";
$result = $conn->query("SELECT name, department, ISNULL(department) AS is_null FROM employees");
echo "<h3>ISNULL() - Returns 1 if expression is NULL, else 0</h3>";
echo "<table border='1'><tr><th>Name</th><th>Department</th><th>Is NULL?</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['department']}</td><td>{$row['is_null']}</td></tr>";
}
echo "</table>";
?>
