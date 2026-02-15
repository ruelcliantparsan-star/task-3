<?php include "../db.php";
$result = $conn->query("SELECT TIME_TO_SEC('01:00:30') AS result");
echo "<h3>TIME_TO_SEC() - Converts a time to seconds</h3>";
echo "<table border='1'><tr><th>TIME_TO_SEC('01:00:30')</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['result']}</td></tr>";
echo "</table>";
?>
