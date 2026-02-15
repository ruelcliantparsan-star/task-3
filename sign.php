<?php include "../db.php";
$result = $conn->query("SELECT name, salary - 60000 AS diff, SIGN(salary - 60000) AS sign_val FROM employees");
echo "<h3>SIGN() - Returns sign of a number (-1, 0, or 1)</h3>";
echo "<table border='1'><tr><th>Name</th><th>salary - 60000</th><th>SIGN</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['diff']}</td><td>{$row['sign_val']}</td></tr>";
}
echo "</table>";
?>
