<?php
include "../db.php";
$result = $conn->query("
    SELECT name,
    CASE
        WHEN salary >= 70000 THEN 'High Salary'
        WHEN salary >= 50000 THEN 'Medium Salary'
        ELSE 'Low Salary'
    END AS salary_level
    FROM employees
");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['salary_level'] . "<br>";
}
?>