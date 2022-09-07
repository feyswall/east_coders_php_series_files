<!DOCTYPE html>
<html>
<head>
	<title>postGet | page</title>
</head>
<body>

<?php
/* 

Super Globals
$GLOBALS
$_GET
$_POST
$_COOKIE
$_SESSION

 */
?>

<form method="POST" action="getReq.php">
	<div>
		<label>
			fisrt name
			<input type="text" name="user">
		</label>
	</div>

	<div>
		<label>
			last name
			<input type="text" name="lastName">
		</label>
	</div>

	<div>
		<label>
			password
			<input type="password" name="pass">
		</label>
	</div>
	<button type="submit" name="btn" value="submit">submit</button>
</form>


</body>
</html>