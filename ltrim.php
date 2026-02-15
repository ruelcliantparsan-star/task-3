<?php include "../db.php";
$result = $conn->query("SELECT LTRIM('   Hello World') AS result");
echo "<h3>LTRIM() - Removes leading spaces from a string</h3>";
echo "<table border='1'><tr><th>Result</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>'{$row['result']}'</td></tr>";
echo "</table>";
?>
