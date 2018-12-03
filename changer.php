<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Number Changed</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl3">
<?php
   include 'connectdb.php';
   $customerID= $_POST["customer"];
   $Newnumber= $_POST["number"];   
   $query1= 'UPDATE Customer SET PhoneNumber = "'. $Newnumber . '" WHERE CustomerID="' . $customerID . '"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   echo "The Number Has Been Changed!";
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
