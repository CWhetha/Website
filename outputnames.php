<?php
 $query = "SELECT * FROM Customer ORDER BY LastName";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   echo "CustomerID |  FirstName |  LastName  |  City  |  PhoneNumber  |  AgentID </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["CustomerID"];
        echo '">' . $row["CustomerID"] . " " . $row["FirstName"] . " " . $row["LastName"] . " " . $row["City"]. " " . $row["PhoneNumber"]. " " . $row["AgentID"] . "<br>";
   }
   mysqli_free_result($result);
?>
