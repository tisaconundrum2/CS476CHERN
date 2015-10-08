w<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<?php
				//variables
				$FieldCheck = True;
				
				if (empty($_POST['user_id'])) {
					$userErr = "Please type your username!";
					$FieldCheck = False;
				}
				else {
					$userErr = "Please retype your username";	
					$user_id = ($_POST["user_id"]);
					$FieldCheck = True;
				}
				
				if (empty($_POST['user_pass'])) {
					$passErr = "Please type your password!";
					$FieldCheck = False;
				}
				else {
					$passErr = "";
					$user_pass = ($_POST["user_pass"]);
					$FieldCheck = True;
				}

				
				//if not true then go back to the fields.
				if ($FieldCheck !== True) {
					echo "<form action='$_SERVER[PHP_SELF]' method='POST'>";
						echo "<p>";
						
						echo "<label id='blockAlign' for='user_id'>User Name: </label>";
						echo "<input type='text' name='user_id' size='30' maxlength='20' />";
						echo "<span class='error'>* $userErr </span>";
						echo "<br>";
						
						echo "<label id='blockAlign' for='user_pass'>Password: </label>";
						echo "<input type='password' name='user_pass' size='30' maxlength='30' />";
						echo "<span class='error'>* $passErr </span>";
						echo "<br>";
						
						echo "<input type='submit' value='Log In'><br>";
						echo "<a class='regular' href='newUser.php'>Not Registered? Click Here</a>";
						echo "</p>";
					echo "</form>";
				} else {
					
					$CheckID = mysql_query("SELECT * FROM users WHERE UserID = '$user_id'");
					$CheckPass = mysql_query("SELECT * FROM users WHERE UserID = '$user_id' AND Password = '$user_pass'");

					if(mysql_num_rows($CheckID) > 0 && mysql_num_rows($CheckPass) > 0)
					{
					
						$_SESSION['UserID'] = $user_id;
						$_SESSION['Password'] = $user_pass;
						$_SESSION['Session'] = 1;
						
						echo "<p>";
						echo "You're now signed in $user_id<br>";
						echo "<a href = 'forums.php'>Goto Forums";
						
						
						
											

					} else if (mysql_num_rows($CheckID) == 0) {
							echo "<p>";
							echo "Please <a href=Login.php>try again.</a>";
	
					} else if (mysql_num_rows($CheckPass) == 0 && mysql_num_rows($CheckID) > 0) {
							echo "<p>";					
							echo "Please <a href=Login.php>try again.</a>";
					}
				}

				?>

</form>
</div>

</div>

<!--Footer-->

<?php include_once('footer.php');?>

</body>
</html>


