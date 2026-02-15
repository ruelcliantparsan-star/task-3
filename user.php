<?php include "../db.php";
$result = $conn->query("SELECT USER() AS current_user");
echo "<h3>USER() - Returns the current MySQL username and host</h3>";
echo "<table border='1'><tr><th>User</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['current_user']}</td></tr>";
echo "</table>";
?>
