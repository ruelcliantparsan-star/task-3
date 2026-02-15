<?php include "../db.php";
$result = $conn->query("SELECT SEC_TO_TIME(3661) AS result");
echo "<h3>SEC_TO_TIME() - Converts seconds to HH:MM:SS format</h3>";
echo "<table border='1'><tr><th>SEC_TO_TIME(3661)</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
