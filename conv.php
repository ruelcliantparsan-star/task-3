<?php include "../db.php";
$result = $conn->query("SELECT id, CONV(id, 10, 16) AS hex_val FROM employees");
echo "<h3>CONV() - Converts a number from one base to another</h3>";
echo "<table border='1'><tr><th>ID (Base 10)</th><th>HEX (Base 16)</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['hex_val']}</td></tr>";
}
echo "</table>";
?>
