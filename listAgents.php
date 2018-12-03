<?php
 $query = "SELECT * FROM Agent ORDER BY LastName";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo 'Select an Agent ID <select name="AgentIDs">';
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row["AgentID"].'">' . $row["AgentID"] . " " . $row["FirstName"] . " " . $row["LastName"] . '</option>';
   }
   echo '</select>';
   mysqli_free_result($result);
?>
