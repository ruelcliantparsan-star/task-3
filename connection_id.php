<?php include "../db.php";
$result = $conn->query("SELECT CONNECTION_ID() AS conn_id");
echo "<h3>CONNECTION_ID() - Returns the unique connection ID for the current connection</h3>";
echo "<table border='1'><tr><th>Connection ID</th></tr>";
$row = $result->fetch_assoc();
echo "<tr><td>{$row['conn_id']}</td></tr>";
echo "</table>";
?>
