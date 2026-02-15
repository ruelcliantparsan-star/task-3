<?php include "../db.php";
$result = $conn->query("SELECT SYSTEM_USER() AS sys_user");
echo "<h3>SYSTEM_USER() - Returns the current MySQL username and hostname</h3>";
echo "<table border='1'><tr><th>System User</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['sys_user']}</td></tr>";
echo "</table>";
?>
