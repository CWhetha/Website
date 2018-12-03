
<?php
$query = "SELECT * FROM Customer ORDER BY LastName";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["CustomerID"] . " " . $row["FirstName"] . " " . $row["LastName"] . " " . $row["City"] . " " . $row["PhoneNumber"] . " " . $row["AgentID"] . " " . "</li>";
}
mysqli_free_result($result);
echo "<ol>";
?>
