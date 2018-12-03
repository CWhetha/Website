<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl2">
<?php
   include 'connectdb.php';
   $order=$_POST["order"];
   $type=$_POST["type"];
   if ($order=="Ascending" && $type=="Description"){
   $query = 'SELECT ProductID, description, cost FROM Product ORDER BY description ASC';
   }
   if ($order=="Ascending" && $type=="Price"){
   $query = 'SELECT ProductID, description, cost FROM Product ORDER BY cost ASC';
   }
   if ($order=="Descending" && $type=="Description"){
   $query = 'SELECT ProductID, description, cost FROM Product ORDER BY description DESC';
   }
   if ($order=="Descending" && $type=="Price"){
   $query = 'SELECT ProductID, description, cost FROM Product ORDER BY cost DESC';
   }
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "ProductID | Description | Price" . "<br>";  
   while ($row = mysqli_fetch_assoc($result)) {
        echo  $row["ProductID"] . " | " . $row["description"] . " | " . $row["cost"] . "<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
<p>
<hr>
<p>
<form action="index2.php" method="post">
<input type='submit' value='Return to Main'  />
</form>
</body>
</html>
