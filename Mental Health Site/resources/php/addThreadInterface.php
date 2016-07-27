<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
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
</body>
</html>