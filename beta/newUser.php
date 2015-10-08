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


	<div id="Content">

<h1>Registration</h1>
<p>Welcome New User!<br />
Please fill out our form<br />
To enjoy the new stuff that<br />
will be coming around soon</p>


<form action="ValidateReg.php" method="POST">
<p>
<?php
	#username
	echo "<label id='blockAlign' for='user_id'>User Name: </label>";
	echo "<input type='text' name='user_id' size='30' maxlength='20' /><br>";
	#password
	echo "<label id='blockAlign' for='user_pass'>Password: </label>";
	echo "<input type='password' name='user_pass' size='30' maxlength='30' /><br>";
	#First Name
	echo "<label id='blockAlign' for='first_name'> Your First Name: </label>";
	echo "<input type='text' name='first_name' size='30' maxlength='30' /><br>";
	#Last Name
	echo "<label id='blockAlign' for='last_name'> Your Last Name: </label>";
	echo "<input type='text' name='last_name' size='30' maxlength='40' /><br>";
	echo "<input type='submit' value='Register'><br>";
?>
</p>
</form>

	
    </div>


<!--Footer-->

<?php include_once('footer.php');?>



</body>
</html>


