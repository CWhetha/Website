<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Database</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl1">
<?php
include 'connectdb.php';
?> 
<h1>Welcome To the Database</h1>
</ol>
<form action="getdata.php" method="POST" id="first">
<p>
<hr>
<p>  
<h2>Purchases:</h2>
<?php
include 'outputnames.php';
?>
<input type="submit" value="Get users Purchases">
</form>
<form action="print.php" method="POST" id="second">
<hr>
<p>
<h2> Products:</h2>
<input type="radio" name="type" value="Description" checked> Description<br>
<input type="radio" name="type" value="Price"> Price<br>
<input type="radio" name="order" value="Ascending" checked> Ascending<br>
<input type="radio" name="order" value="Descending"> Descending<br>
<input type="submit" value="Get List of Products">
</form>
<form action="addpurchase.php" method="post" id="third">
<hr>
<p>
<h2> Add a Purchase:</h2>
<?php
include 'listnames.php';
?>
<br>
<?php
include 'listProducts.php';
?>
<br>
Enter The Amount to be Purchased: <input type="text" name="ItemsPurchased"><br>
<input type="submit" value="Add Purchase">
</form>
<form action="addnewcust.php" method="post" id="fourth">
<hr>
<p>
<h2> Add a New Customer:</h2>
Enter The New Customer's ID: <input type="text" name="CustomerID"><br>
Enter the Customers First Name: <input type="text" name="FirstName"><br>
Enter The Customers LastName: <input type="text" name="LastName"><br>
Enter the City This Customer Lives In: <input type="text" name="City"><br>
Enter the Customers Phone Number: <input type="text" name="PhoneNumber"><br>
<?php
include 'listAgents.php';
?>
<br>
<input type="submit" value="Add New Customer">
</form>
<form action="changephone.php" method="post" id="fifth">
<hr>
<p>
<h2> Update a Customers Phone Number:</h2>
<?php
include 'listnames.php';
?>
<input type="submit" value="Update">
</form>
<form action="deletecust.php" method="post" id="sixth">
<hr>
<p>
<h2> Delete a Customer:</h2>
<?php
include 'listnames.php';
?>
<input type="submit" value="Delete Customer">
</form>
<form action="morethan.php" method="post" id="seventh">
<hr>
<p>
<h2> Customers who have bought more than:</h2>
Enter the amount: <input type="text" name="amount"><br>
<input type="submit" value="Find">
</form>
<p>
<hr>
<p>
<h2> Items That Have Never Been Purchased:</h2>
<?php
   include 'neverpurchase.php';
?>
<form action="purchases.php" method="post" id="eigth">
<hr>
<p>
<h2> See How Items Are Selling:</h2>
<?php
include 'listProducts.php';
?>
<input type="submit" value="Enter A Product ID">
</form>
<?php
mysqli_close($connection);
?> 
</body>
</html>
