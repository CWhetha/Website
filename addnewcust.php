<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Adding New Customer</title>
<link rel="stylesheet" href="additions.css">
</head>
<body id="lvl2">
<?php
   include 'connectdb.php';
?>
<h1></h1>
<ol>
<?php
   $query = "SELECT * FROM Customer";
   $Taken="false";
   $CustomerID= $_POST["CustomerID"];
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
   }
   while ($row = mysqli_fetch_assoc($result)) {
      if ($CustomerID==$row[CustomerID]){
        echo "That ID Has Already Been Taken";
        $Taken="true";
      }
   }
   
   $FirstName= $_POST["FirstName"];
   $LastName= $_POST["LastName"];
   $City= $_POST["City"];
   $PhoneNumber= $_POST["PhoneNumber"];
   $AgentID= $_POST["AgentIDs"];
   if ($Taken=="false"){
   $query = 'INSERT INTO Customer values("' . $CustomerID . '","' . $FirstName . '","' . $LastName . '","' . $City . '","' . $PhoneNumber . '","' . $AgentID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "The Customer Has Been Added!";
   }
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
