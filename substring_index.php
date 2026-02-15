<?php include "../db.php";
$result = $conn->query("SELECT name, SUBSTRING_INDEX(name, ' ', 1) AS first_name FROM employees");
echo "<h3>SUBSTRING_INDEX() - Returns substring before specified delimiter occurrence</h3>";
echo "<table border='1'><tr><th>Full Name</th><th>First Name</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['first_name']}</td></tr>";
}
echo "</table>";
?>
