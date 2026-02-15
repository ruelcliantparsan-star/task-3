<?php include "../db.php";
$result = $conn->query("SELECT name, department, FIELD(department, 'HR', 'IT', 'Finance') AS field_pos FROM employees");
echo "<h3>FIELD() - Returns index position of value in list</h3>";
echo "<table border='1'><tr><th>Name</th><th>Department</th><th>Field Position</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['department']}</td><td>{$row['field_pos']}</td></tr>";
}
echo "</table>";
?>
