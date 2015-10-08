<h1></h1><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--For Facebook-->
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

<h1>Registration</h1>
<p>Welcome New User!<br />
Please fill out our form<br />
To enjoy the new stuff that<br />
will be coming around soon</p>



<p>
<?php
				//after some realizing how ineefficient my approach was for my previous form
				//i knew i had to do some real deep digging on the notes, and online.
				//us3.php.net was a primary place to try and perfect this approach to arrarys.
				//http://net.tutsplus.com/tutorials/php/user-membership-with-php/ was great for getting 
				//all other codes working
				
				/*$a = array(
					"one" => 1,
					"two" => 2,
					"three" => 3,
					"seventeen" => 17
				*/
				$labels = array("user_id" => "User ID",
								"user_pass" => "Password",
								"first_name" => "Your first name",
								"last_name" => "Your last name");
						//set user to true and then go through each of the fields and make it false otherwise.
						$FieldCheck = True;
				
				foreach( $_POST as $field => $value) 
				{	//checks to see if the value is identical to value 2
					if ($field === "user_id" or $field === "first_name" or $field === "last_name")
					{
						if (empty($value)) 
						{
							echo "$labels[$field] is required.<br>";
							$FieldCheck = False;
						} else {
							if($field === "user_id") {
								$user_id = $value;
							}
							if ($field === "first_name") {
								$first_name = $value;
							}
							if($field === "last_name") {
								$last_name = $value;
							}
						}
					}
					
					if ($field === "user_pass" )
					{
						if(empty($value))
						{
							echo "$labels[$field] is required field.<br>";
							$FieldCheck = False;
							
						} else {
							$password = $value;
							}
					}
				}
				
				
				if ($FieldCheck)
				{
					//Checking the existance of a username that is already in the db.
					$checkuser = mysql_query("SELECT * FROM users WHERE UserID = '$user_id'");
					if(mysql_num_rows($checkuser) === 1)
					{
						echo "Sorry, that username is taken. Please try again.";
						$FieldCheck = False;
					}else{
					
					//adding the user to the databse
					echo "Congratulations $first_name $last_name. You now have been registered as $user_id. <br>";
					echo "Please <a href='Login.php' class='regular'>Click here</a> to Login.";
					$newuser = "INSERT INTO `users`(`UserID`, `Password`, `FirstName`, `LastName`) VALUES ('$user_id', '$password', '$first_name', '$last_name')";
					$result = mysql_query($newuser);
					
					$insert_user_log = mysql_query("INSERT INTO log (UserLogged) VALUES ('$user_id')");
					
					}
				}
				
				if ($FieldCheck !== True)
					{						
						echo "<form action='$_SERVER[PHP_SELF]' method='POST'>";
						#user
						echo "<p>";
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
						echo "</p>";
						echo "</form>";
						
					} 
				
					
				?>
                
	
    </div>


<!--Footer-->

<?php include_once('footer.php');?>



</body>
</html>


