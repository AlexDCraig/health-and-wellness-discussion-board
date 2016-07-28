<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wellness Forum</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="forum.css"/>
</head>

<body>
<div class="header">
  <h1>The Wellness Forum</h1>
  <div class="nav">
    <ul>
      <li><a href="forum.php">Home</a></li>
      <li><a href="forum.php">Login</a></li>
      <li><a href="forum.php">Sign up</a></li>
      <li><a href="forum.php">About Us</a></li>
    </ul>
  </div>
</div>
<?php
  $dbc = mysqli_connect("oniddb.cws.oregonstate.edu","hoffera-db","xWlEwDsi2dVhlHW9","hoffera-db");
  if (!$dbc) {
    die('Could not connect: ');
  }

  //get all the contents of the database table.
  $query = "SELECT * FROM wellnessDB";
  $result = mysqli_query($dbc, $query);
  
  //display the user name and number of wins the user has in a table.
  //table will display the data in decsending order by wins.
  if(mysqli_num_rows($result) > 0){   
    //for each row in the table displey username and wins.
     while($row = mysqli_fetch_assoc($result))
     {
	 $user = $row['username'];
	 echo '<div class="thread">';
	 echo '<p><b>User: </b>'.$row['username'].'<br><b>Title: </b>' . $row['title'] . '<br/><br/>';
	 echo '<b>Thread contents: </b>' . $row['text']. '</p>';
	 echo '</div>';
    }
  }
  mysqli_free_result($result);
  mysqli_close($dbc);   
?>
<footer>
  <p>&copy; 2016 Copyright Wellness Forum.</p>
</footer>
</body>
</html
