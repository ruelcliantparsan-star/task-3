<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, DAYOFMONTH(hire_date) AS dom FROM employees");
echo "<h3>DAYOFMONTH() - Returns the day of the month (1-31)</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Day of Month</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['dom']}</td></tr>";
}
echo "</table>";
?>
