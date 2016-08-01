<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wellness Forum</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="forum.css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="header">
	  <h1>The Wellness Forum</h1>
	  <div class="nav">
		<ul>
		  <li><a href="forum.php">Home</a></li>
		  <li><a href="forum.php">Login</a></li>
		  <li><a href="forum.php">Sign up</a></li>
		  <li><a href="deleteThreadInterface.html">Delete Thread</a></li>
		  <li><a href="forum.php">About Us</a></li>
		</ul>
	  </div>
	</div>
	<input type="button" name="Create New Thread" class="btn btn-info"  value="New Thread" onclick="unhidePostButton()" />
	<div id="newThreadDiv" style="display:none;" class="answer_list">
		<form action="insert.php" method="post">
			<div class="form-group">
				<label>Username: <input type="text" name="username" /></label>
				<label>Title: <input type="text" name="title" /></label>
				<label>Parent Forum: <input type="text" name="parentThread" /></label>
			</div>
			<div class="form-group">
				<label for="threadTextArea" >Text:</label> 
				<textarea class="form-control" rows="5" type="text" name="threadTextArea" id="threadTextArea" ></textarea></label>
			 </div>
			<input type="submit" />
		</form>
	</div>
	
	<script>
		var newThreadButtonPressed = 1;//1 when the new thread button is hidden
		
		function unhidePostButton()
		{
			if (newThreadButtonPressed === 1)
			{
				document.getElementById('newThreadDiv').style = "display:block;";
				newThreadButtonPressed = 0;	
			}			
		}
	</script>
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
		 include 'buttons.php';
		}
	  mysqli_free_result($result);
	  mysqli_close($dbc);  
	?>
	<footer>
	  <p>&copy; 2016 Copyright Wellness Forum.</p>
	</footer>
</body>
</html
