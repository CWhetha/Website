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
   $amount= $_POST["amount"];
   $query = 'SELECT q.FirstName, q.LastName, p.description, c.itemspurchased FROM Customer q, Product p, Purchases c WHERE c.CustomerID = q.CustomerID AND p.ProductID = c.ProductID AND c.itemspurchased > "' . $amount . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo "Name: " . $row["FirstName"] . " " . $row["LastName"] . "   |   Item Description: " . $row["description"] ."  |    Amount: " . $row["itemspurchased"];
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
