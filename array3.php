<?php
$students = array(
    "Manoj" => array("marks" => 8.5, "status" => "Pass"),
    "Aditya" => array("marks" => 4.0, "status" => "Fail"),
    "Anuj" => array("marks" => 7.5, "status" => "Pass")
);

echo "<table>";
echo "<tr><th>Name</th><th>Marks</th><th>Status</th></tr>";
echo "<table border = '4px'>";
foreach ($students as $name => $info) {
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>" . $info["marks"] . "</td>";
    echo "<td>" . $info["status"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>