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
<?php include "serverside.php"; $_SESSION = array(); session_destroy(); ?>


<div id="Content">

<h1>You're Logged Out</h1>
<p>
Thanks for visiting
</p>
	
	
</div>


<!--Footer-->

<?php include_once('footer.php');?>

</body>
</html>


