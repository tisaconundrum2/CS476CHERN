<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


	<div id="Content">

<h1>Welcome to the CHERN Homepage.</h1>
<p>Welcome, here we'll be discussing everything Prosidy and Phones
<p>You are currently on main page. click on our things up top. It's all about meat right now. That will change later.
</div>

<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>

<!--Footer-->

<?php include_once('footer.php');?>



</body>
</html>


