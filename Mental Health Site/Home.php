<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<?php

  $dbc = mysqli_connect("oniddb.cws.oregonstate.edu","hoffera-db","xWlEwDsi2dVhlHW9");
  if (!$dbc) {
    die('Could not connect: ');
  }
    
/*    //Gets the signed in users information
    $username = $_SESSION['valid_user'];
    $query = "SELECT * FROM user WHERE username='$username'";
    $result2 = mysqli_query($dbc, $query);
    $row2 = mysqli_fetch_assoc($result2);*/
    
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
            echo '<p><b>Owner: </b>'.$row['username'].'<br><b>Title: </b>' . $row['title'] . '<br/><br/>';
            echo '<b>Thread contents: </b>' . $row['threadTextArea']. '</p>';
            echo '</div>';
    }
  }
  mysqli_free_result($result);
  mysqli_close($dbc);   
?>
</body>
</html