<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();

	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$lvllist = $_POST['lvllist'];
		if(empty($lvllist)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $lvllist);
			$message = $result;
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
</head>
<body>
	<h2>Create User</h2>
	<p class="errorTxt"><?php if(!empty($message)){echo $message;} ?></p>
	<form action="admin_createuser.php" method="post">
		<input type="text" name="fname" value="" placeholder="First Name">
		<input type="text" name="username" value="" placeholder="Username">
		<input type="text" name="password" value="" placeholder="Password">
		<input type="text" name="email" value="" placeholder="E-mail">
		<select name="lvllist" class="level">
			<option value="">Select User Level</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select>
		<input type="submit" name="submit" value="Create" id="submit">
	</form>
</body>
</html>
