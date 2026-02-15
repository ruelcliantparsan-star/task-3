<?php include "../db.php";
$result = $conn->query("SELECT id, BIN(id) AS binary_val FROM employees");
echo "<h3>BIN() - Returns binary representation of a number</h3>";
echo "<table border='1'><tr><th>ID</th><th>Binary</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['binary_val']}</td></tr>";
}
echo "</table>";
?>
