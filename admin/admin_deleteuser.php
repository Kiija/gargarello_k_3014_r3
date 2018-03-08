<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h2>Delete Users</h2>
	<div id="deleteUsers">
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_fname']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\" class=\"deletebutton\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i><br>";
		}
	?>
</div>
</body>
</html>
