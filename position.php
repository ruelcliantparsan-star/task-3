<?php include "../db.php";
$result = $conn->query("SELECT name, POSITION('a' IN name) AS pos FROM employees");
echo "<h3>POSITION() - Returns position of substring in string</h3>";
echo "<table border='1'><tr><th>Name</th><th>Position of 'a'</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['pos']}</td></tr>";
}
echo "</table>";
?>
