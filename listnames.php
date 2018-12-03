<?php
 $query = "SELECT * FROM Customer ORDER BY LastName";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo 'Select The Customer ID: <select name="CustomerIDs">';
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row["CustomerID"].'">' . $row["CustomerID"] . " " . $row["FirstName"] . " " . $row["LastName"] . '</option>';
   }
   echo '</select>';
   mysqli_free_result($result);
?>
