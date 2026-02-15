<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, EXTRACT(YEAR FROM hire_date) AS yr, EXTRACT(MONTH FROM hire_date) AS mo FROM employees");
echo "<h3>EXTRACT() - Extracts a part from a date</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Year</th><th>Month</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['yr']}</td><td>{$row['mo']}</td></tr>";
}
echo "</table>";
?>
