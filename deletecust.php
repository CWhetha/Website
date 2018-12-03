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
?>
<?php
   $deleting= $_POST["CustomerIDs"];
   $query = 'DELETE FROM Customer WHERE CustomerID="' . $deleting . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The user was deleted!";
   mysqli_close($connection);
?>
</ol>
<p>
<hr>
<p>
<form action="index2.php" method="post">
<input type='submit' value='Return to Main'  />
</form>
</body>
</html>
