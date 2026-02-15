<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, MONTHNAME(hire_date) AS month_name FROM employees");
echo "<h3>MONTHNAME() - Returns the full name of the month</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Month Name</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['month_name']}</td></tr>";
}
echo "</table>";
?>
