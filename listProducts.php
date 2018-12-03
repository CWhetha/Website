<?php
 $query = "SELECT * FROM Product ORDER BY ProductID";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo 'Enter The Product ID: <select name="ProductIDs">';
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row["ProductID"].'">' . $row["ProductID"] . " " . $row["description"] . '</option>';
   }
   echo '</select>';
   mysqli_free_result($result);
?>
