<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, LAST_DAY(hire_date) AS last FROM employees");
echo "<h3>LAST_DAY() - Returns last day of the month for a date</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Last Day of Month</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['last']}</td></tr>";
}
echo "</table>";
?>
