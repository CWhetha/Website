<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="additions.css">
<title>User Purchases</title>
</head>
<body id="lvl2">
<?php
include 'connectdb.php';
?>
<ol>
<?php
   $whichCust= $_POST['customer'];
   $query = 'SELECT p.description,  c.itemspurchased FROM Product p, Purchases c WHERE c. CustomerID="' . $whichCust . '" AND p.ProductID = c.ProductID';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"] . "  " . $row["itemspurchased"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
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
