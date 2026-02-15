<?php include "../db.php";
$result = $conn->query("SELECT SYSDATE() AS sys_time");
echo "<h3>SYSDATE() - Returns current date and time at execution time</h3>";
echo "<table border='1'><tr><th>SYSDATE()</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['sys_time']}</td></tr>";
echo "</table>";
?>
