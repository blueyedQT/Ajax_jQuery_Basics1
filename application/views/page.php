<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Assignment</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#mainForm').submit(function(){
			$.post(
				$('#mainForm').attr('action'),
				$('#mainForm').serialize(),
				function(output){
					$('#messages').append("<p>name: "+output.name+ "</p><p>age: " +output.age+ "</p><br />");
				}, "json"
			);
			return false;
		});
	});
	</script>
	<style type="text/css">
		button {
			display: block;
		}
		p {
			display: inline-block;
			width: 150px;
		}
	</style>
</head>
<body>
	<form id="mainForm" action="/users/random" method="post">
		<input type="submit" value="Get a random user info">
	</form>
	<div id="messages"></div>
</body>
</html>