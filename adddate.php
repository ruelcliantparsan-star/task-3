<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, ADDDATE(hire_date, 30) AS new_date FROM employees");
echo "<h3>ADDDATE() - Adds a time/date interval to a date</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>+30 Days</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['new_date']}</td></tr>";
}
echo "</table>";
?>
