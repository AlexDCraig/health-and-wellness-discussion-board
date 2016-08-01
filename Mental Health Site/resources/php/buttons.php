<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php
	echo '<button type="button" name="reply_button" class"=reply_button" onclick="reply_post()">reply</button>';
	echo '<button type="button">report</button>';
	echo '<button type="button">save</button>';
	echo '<button type="button">like</button>';
	
	echo '<div id="replyThreadDiv" style="display:none;">
			<form>
				<div class="form-group">
					<label for="replyTextArea" >Reply:</label> 
					<textarea class="form-control" rows="5" type="text" name="replyTextArea" id="replyTextArea" ></textarea></label>
				</div>
			</form>
			<input type="submit" />
		</div>';
		
	echo '<script>
		var replyButtonPressed = 1;//1 when the new thread button is hidden
		
		function reply_post()
		{
			if (replyButtonPressed === 1)
			{
				document.getElementById("replyThreadDiv").style = "display:block;";
				repolyButtonPressed = 0;	
			}			
		}
	</script>';
?>
		