<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('facebook.php');?>


<!--Header-->
<style type="text/css">
<!--

-->
</style>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php include_once('sidebar.php');?>
<br />
<?php include_once('header.php');?>
<?php include_once('serverside.php');?>
<div id="Content">


<form action="Login_confirm.php" method="POST">
<p>
<?php
//checking to see if a session actually exists.

if(!empty($_SESSION['Session']) && !empty($_SESSION['userID']))
{
	$username = $_SESSION['userID'];
	echo "Hi ".$username." you're logged in";
	echo "Feel Free to head on over to our forum's page";
	echo "<a href = 'Forum.php'/>NAU Robotics Forums</a>";

	echo "<a href='logout.php'/>Log Out</a>";

} else {
	echo "<label id='blockAlign' for='user_id'>User Name: </label>";
	echo "<input type='text' name='user_id' size='30' maxlength='20' /><br>";

	echo "<label id='blockAlign' 'for='user_pass'>Password: </label>";
	echo "<input type='password' name='user_pass' size='30' maxlength='30' /><br>";

	echo "<input type='submit' value='Log In'><br>";
	echo "<a href='newUser.php'>Not Registered? Click Here</a>";
}
			
?>
</p>
</form>

</div>

<!--Footer-->

<?php include_once('footer.php');?>

</body>
</html>


