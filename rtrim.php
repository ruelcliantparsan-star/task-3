<?php include "../db.php";
$result = $conn->query("SELECT RTRIM('Hello World   ') AS result");
echo "<h3>RTRIM() - Removes trailing spaces from a string</h3>";
echo "<table border='1'><tr><th>Result</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>'{$row['result']}'</td></tr>";
echo "</table>";
?>
