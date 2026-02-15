<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, QUARTER(hire_date) AS quarter FROM employees");
echo "<h3>QUARTER() - Returns the quarter of the year (1-4)</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Quarter</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['quarter']}</td></tr>";
}
echo "</table>";
?>
