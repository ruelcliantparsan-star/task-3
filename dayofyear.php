<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, DAYOFYEAR(hire_date) AS doy FROM employees");
echo "<h3>DAYOFYEAR() - Returns the day of the year (1-366)</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Day of Year</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['doy']}</td></tr>";
}
echo "</table>";
?>
