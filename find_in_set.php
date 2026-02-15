<?php include "../db.php";
$result = $conn->query("SELECT name, FIND_IN_SET(department, 'HR,IT,Finance') AS pos FROM employees");
echo "<h3>FIND_IN_SET() - Returns position in comma-delimited list</h3>";
echo "<table border='1'><tr><th>Name</th><th>Position in Set</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['pos']}</td></tr>";
}
echo "</table>";
?>
