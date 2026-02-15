<?php include "../db.php";
$result = $conn->query("SELECT name, MID(name, 1, 5) AS mid_val FROM employees");
echo "<h3>MID() - Extracts a substring (alias of SUBSTRING)</h3>";
echo "<table border='1'><tr><th>Name</th><th>MID(1,5)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['mid_val']}</td></tr>";
}
echo "</table>";
?>
