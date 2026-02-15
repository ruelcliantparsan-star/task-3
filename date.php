<?php include "../db.php";
$result = $conn->query("SELECT name, DATE(hire_date) AS hire_date_only FROM employees");
echo "<h3>DATE() - Extracts the date part from a datetime</h3>";
echo "<table border='1'><tr><th>Name</th><th>Hire Date</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['hire_date_only']}</td></tr>";
}
echo "</table>";
?>
