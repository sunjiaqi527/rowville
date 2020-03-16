<!DOCTYPE html>
<html lang="en">
<head>
		<title>Rowville</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet1" type="text/css" href="css/login.css">

		<style>
		form{
		text-align:center;
		margin-top:150px;
		
		}
		</style>
</head>
<body>
		
		<?php include "content/menu.php"; ?>
		<div id="good" class="good">
		<div class="form">
		<form id='login' action='login.php' method='post' accept-charset='UTF-8' >
			<fieldset >
				<legend>Login</legend>
				<input type='hidden' name='submitted' id='submitted' value='1'/>

				<label for='username' s>Username*:</label> <br>
				<input type='text' name='username' id='username'  maxlength="50" /> <br>
				<br>
				<label for='password' >Password*:</label> <br> 
				<input type='password' name='password' id='password' maxlength="50" /> <br>
				<br>
				<input type='submit' name='Submit' value='Submit' />

			</fieldset>
		</form>
		</div>
	</div>
		<?php include "content/footer.php"; ?>

</body>
</html>