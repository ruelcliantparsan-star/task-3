<?php
include "../db.php";
$result = $conn->query("SELECT CURDATE() AS today");
$row = $result->fetch_assoc();
echo "Today's Date: " . $row['today'];
?>