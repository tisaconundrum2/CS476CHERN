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

<h1>Past Projects</h1>

<?php
/*
this is done to clean up the page full of text.
utilize the template.php file to create the next
set of past projects posts. This will ensure a clean
working page. Of course it doesn't have to be
done this way. Just a guide.
the next proj[11].php should be on top of 
proj[0].php (numbering was badly implemented)
 
*/
include_once('projects/proj[15].php');
include_once('projects/proj[14].php');
include_once('projects/proj[11].php');
include_once('projects/proj[13].php');
include_once('projects/proj[12].php');
include_once('projects/proj[0].php');
include_once('projects/proj[1].php');
include_once('projects/proj[2].php');
include_once('projects/proj[3].php');
include_once('projects/proj[4].php');
include_once('projects/proj[5].php');
include_once('projects/proj[6].php');
include_once('projects/proj[7].php');
include_once('projects/proj[8].php');
include_once('projects/proj[9].php');
include_once('projects/proj[10].php');

?>

</div>

<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>

<!--Footer-->

<?php include_once('footer.php');?>

</body>
</html>


