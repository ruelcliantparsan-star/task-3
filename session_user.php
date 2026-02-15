<?php include "../db.php";
$result = $conn->query("SELECT SESSION_USER() AS session_user");
echo "<h3>SESSION_USER() - Returns the current MySQL username and hostname</h3>";
echo "<table border='1'><tr><th>Session User</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['session_user']}</td></tr>";
echo "</table>";
?>
