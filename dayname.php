<?php include "../db.php";
$result = $conn->query("SELECT name, hire_date, DAYNAME(hire_date) AS day_name FROM employees");
echo "<h3>DAYNAME() - Returns the name of the weekday for a date</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th><th>Day Name</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date']}</td><td>{$row['day_name']}</td></tr>";
}
echo "</table>";
?>
