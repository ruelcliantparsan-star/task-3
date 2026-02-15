<?php include "../db.php";
$result = $conn->query("SELECT name, RAND() AS random_val FROM employees");
echo "<h3>RAND() - Returns a random decimal between 0 and 1</h3>";
echo "<table border='1'><tr><th>Name</th><th>Random Value</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['random_val']}</td></tr>";
}
echo "</table>";
?>
