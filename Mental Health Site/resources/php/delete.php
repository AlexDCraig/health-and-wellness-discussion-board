<html>
<body>
 
 
<?php
$con = mysql_connect("oniddb.cws.oregonstate.edu","hoffera-db","xWlEwDsi2dVhlHW9");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("hoffera-db", $con);
 
$sql="DELETE FROM wellnessDB
WHERE title ='$_POST[title]'";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";
 
mysql_close($con)
?>
</body>
</html>