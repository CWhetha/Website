<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Adding Purchase</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl2">
<?php
   include 'connectdb.php';
   $customer= $_POST["CustomerIDs"];
   $product= $_POST["Products"];
   $amount= $_POST["ItemsPurchased"];
   $query = "SELECT * FROM Purchases WHERE CustomerID=$customer AND ProductID=$product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        if($row[itemspurchased]>$amount)  {
            $amount=$row[itemspurchased]; 
        }
   }
   if ($result->num_rows > 0){
        $query = 'UPDATE Purchases Set itemspurchased="' . $amount . '" WHERE CustomerID="' . $customer . '" AND ProductID ="' . $product . '"'; 
         if (!mysqli_query($connection, $query)) {
         die("Error: insert failed" . mysqli_error($connection));
         }
         echo "The database has been updated";
   }
   else{
        $query = 'INSERT INTO Purchases values("' . $customer . '","' . $product . '","' . $amount . '")';
        if (!mysqli_query($connection, $query)) {
           die("Error: insert failed" . mysqli_error($connection));
        }
        echo "The Purchase Has Been Added";
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
