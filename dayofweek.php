<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, DAYOFWEEK(hire_date) AS dow FROM employees");
echo "<h3>DAYOFWEEK() - Returns weekday index (1=Sunday, 7=Saturday)</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Day of Week</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['dow']}</td></tr>";
}
echo "</table>";
?>
