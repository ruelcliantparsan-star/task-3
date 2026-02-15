<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, SUBDATE(hire_date, 30) AS earlier FROM employees");
echo "<h3>SUBDATE() - Subtracts a time/date interval from a date</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>-30 Days</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['earlier']}</td></tr>";
}
echo "</table>";
?>
