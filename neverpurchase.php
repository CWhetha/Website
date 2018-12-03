<?php
   include 'connectdb.php';
   $query = "SELECT description FROM Product Where ProductID NOT IN (SELECT ProductID FROM Purchases)";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["description"] . "<br>";
   }
   mysqli_free_result($result);
?>
