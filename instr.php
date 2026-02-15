<?php include "../db.php";
$result = $conn->query("SELECT name, INSTR(name, 'a') AS pos FROM employees");
echo "<h3>INSTR() - Returns position of first occurrence of substring</h3>";
echo "<table border='1'><tr><th>Name</th><th>Position of 'a'</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['pos']}</td></tr>";
}
echo "</table>";
?>
