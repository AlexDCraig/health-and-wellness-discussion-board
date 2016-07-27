<html>
<body>
 
 
<?php
$con = mysql_connect("oniddb.cws.oregonstate.edu","hoffera-db","xWlEwDsi2dVhlHW9");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("hoffera-db", $con);
 
$sql="INSERT INTO wellnessDB (username, title, parentThread, text)
VALUES
('$_POST[username]','$_POST[title]', '$_POST[parentThread]', '$_POST[threadTextArea]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>
 