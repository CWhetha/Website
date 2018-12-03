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
   $customer= $_POST["CustomerIDs"];
   $query = 'SELECT PhoneNumber FROM Customer WHERE CustomerID="' . $customer . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo "Here is the Users Current Number: " . $row["PhoneNumber"] . "<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>
   <form action="changer.php" method="post">
   Enter New Phonenumber: <input type="text" name="number"><br>
   <input type="hidden" name="customer" value="<?php echo $customer; ?>"/>
   <input type="submit"  value="Change Number">
   </form>
</ol>
<p>
<hr>
<p>
<form action="index2.php" method="post">
<input type='submit' value='Return to Main'  />
</form>
</body>
</html>
