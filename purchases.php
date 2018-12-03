<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Change A Users Phone Number</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl2">
<?php
   include 'connectdb.php';
   $product= $_POST["ProductIDs"];
   $query = 'SELECT description, cost FROM Product WHERE ProductID="' . $product . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        $cost = $row[cost];
        $description = $row[description];
   }
   $query = 'SELECT c.description, p.itemspurchased, c.cost FROM Product c,Purchases p WHERE p.ProductID = c.ProductID AND c.ProductID="' . $product . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        $sum = $sum+$row[itemspurchased]*$row[cost];
   }
   echo '<li>'. "Description: " . $description . '<li>' . "Cost: " . $cost . '<li>' . "Total Revenue: " . $sum . "<br>";
   mysqli_free_result($result);
?>
<p>
<hr>
<p>
<form action="index2.php" method="post">
<input type='submit' value='Return to Main'  />
</form>
</body>
</html>
