<?php

require_once 'connection.php';



$sql = "SELECT * FROM users";

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0) {
    
echo "<table border='1'>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['PASSWORD'] . "</td>";
echo "</tr>";
}

echo "</table>";
} else {
    echo "No users found";
}