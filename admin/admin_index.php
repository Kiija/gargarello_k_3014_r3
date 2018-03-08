<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
</head>
<body>
	<h2><?php echo $_SESSION['user_name'];?>'s Admin Page</h2>
	<div class="buttonCon"><a href="admin_createuser.php" class="button">Create User</a></div>
	<div class="buttonCon"><a href="admin_edituser.php" class="button">Edit User</a></div>
	<div class="buttonCon"><a href="admin_deleteuser.php" class="button">Delete User</a></div>
	<div class="buttonCon"><a href="phpscripts/caller.php?caller_id=logout" class="button">Sign Out</a></div>
</body>
</html>
