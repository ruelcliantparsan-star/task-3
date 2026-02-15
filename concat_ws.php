<?php include "../db.php";
$result = $conn->query("SELECT CONCAT_WS(' | ', name, department) AS combined FROM employees");
echo "<h3>CONCAT_WS() - Concatenate with separator</h3>";
echo "<table border='1'><tr><th>Combined</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['combined']}</td></tr>";
}
echo "</table>";
?>
