<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('facebook.php');?>


<!--Header-->
<style type="text/css">


</style>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php include_once('sidebar.php');?>
<br />
<?php include_once('header.php');?>

<div id="Content">

<h1>Contact Us</h1>
<!--
 |Style Sheets.
 +-->
<link rel="stylesheet" type="text/css" href="style.css">
<?php
//variables
$fname = $lname = $email = $emailto = $subject = $content = "";


//server call

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$fname = test_input($_POST['fname']);
	$lname = test_input($_POST['lname']);
	$email = test_input($_POST['email']);
	$subject = test_input($_POST['subject']);
	$emailto = test_input($_POST['emailto']);
	$content = test_input($_POST['content']);
}


function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>


<!--
 |Javascript
 +-->
<script>
function validateForm(){
//fname

	var fname=document.forms["myForm"]["fname"].value;
	if (fname==null || fname==""){
		document.getElementById("firstName").innerHTML = "<font color='red'>*First name must be filled out</font>";
		return false;
	}
//lname
	var lname=document.forms["myForm"]["lname"].value;
	if (lname==null || lname==""){
		document.getElementById("lastName").innerHTML = "<font color='red'>*Last name must be filled out</font>";
		return false;
	}
//email
	var email=document.forms["myForm"]["email"].value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	//See if the user wrote their email in.
	if (email==null || email==""){
		document.getElementById("emailFill").innerHTML = "<font color='red'>*Email address must be filled out</font>";
		return false;
	}
	//validate if email is correctly used.
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
		document.getElementById("emailValid").innerHTML = "<font color='red'>*Not a valid e-mail address</font>";
		return false;
	}

//subject
	var subject=document.forms["myForm"]["subject"].value;
	if (subject==null || subject==""){
		document.getElementById("subjectData").innerHTML = "<font color='red'>*Subject must be filled out</font>";
		return false;
	}

//body
	var content=document.forms["myForm"]["content"].value;
	if (content==null || content==""){
		document.getElementById("contentData").innerHTML = "<font color='red'>*Please write a message</font>";
		return false;
	}
	
	if (subject!="" || content!="" || email!="" || fname!="" || lname!=""){
		document.getElementById("emailSent").innerHTML = "<font color='blue'>Press submit to send your Email.<font>";  // Sets the text content
	}
}
</script>

</head>

<body>


<!--
 |Actual Form.
 +-->
<!--
 |Div notifications
 +-->
<div id="firstName"></div>
<div id="lastName"></div>
<div id="emailValid"></div>
<div id="emailFill"></div>
<div id="subjectData"></div>
<div id="contentData"></div>
<div id="emailSent"></div>


<form name="myForm" action="Email_Sent.php" onSubmit="return validateForm()" method="post">
<p>
    <label>First name:</label>
    <input type="text" name="fname" onBlur="validateForm()"><br>
    <label>Last name:</label>
    <input type="text" name="lname" onBlur="validateForm()"><br>
    <label>Email Address:</label>
    <input type="text" name="email" onBlur="validateForm()"><br>
    <label>Pick an address:</label>
        <select name="emailto" id="emailing-to">
            <option value="ngf4@nau.edu">Nicholas Finch ngf4@nau.edu</option>
            <option value="cg695@nau.edu">Cameron Gaskin cg695@nau.edu</option>
            <option value="harrison@nau.edu">Harrison Lambeth harrison@nau.edu</option>
            <option value="eld66@nau.edu">Erik Dixon eld66@nau.edu</option>

        </select><br>
    <label>Subject:
    <textarea name="subject" rows="1" cols="50" onBlur="validateForm()"></textarea><br>

     </label>
     <br>
    <label>Message:
    <textarea name="content" rows="5" cols="50" onBlur="validateForm()"></textarea>
     </label>
     <br>
<!--
 | Submit button
 +-->
<input type="submit" value="Submit">
</p>
</form>

<!--
 | Output of emailing system
 +-->
<?php

/*
$body = <<<MARKER
<p>
Name: $fname $lname<br>
email: $email<br>
emailing to: $emailto<br>
Subject: $subject<br><br>

Body:<br>
$content<br>
</p>

MARKER;

echo $body;
*/


?>

</div>
<!--Footer-->
<?php include_once('footer.php');?>
</head>
</body>
</html>


