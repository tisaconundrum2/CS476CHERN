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

<h1>Welcome to the NAU Robotics Homepage.</h1>
<p>A new year, a new semester. I'm excited to see some new and familiar faces soon. <br />
  - Nick
  <br />
<p>PLZ!! Please check the Projects&gt;<a href="Current_projects.php">Current Projects</a>. There are some major updates in here
<p>Subscribe to our <a href="subscribe.php">mailing list</a> to get the latest updates about upcoming Projects and news
<p>Some major pushes on this website, <a href="Meeting_times.php">Meet Time</a> page has been altered<br />
  A &quot;Last updated&quot; notification is on the bottom of the pages, to see how far back since the last update.
<p>New updates to our &quot;<a href="Current_projects.php">Current Projects</a>&quot;

<p>New updates to our "<a href="Future_projects.php">Future Projects</a>". <br>
  <a href="Contact_us.php">Notify</a> me of a time when you'd like to work on these projects

<p>Feel free to go to our <a href="https://www.facebook.com/groups/508716672547053/">facebook</a> group page and add yourself.</p>
<p><b>Update on Forums</b> It seems to be down. <br />
  <br />
  The Forums page is no longer working. I'll try and work on it, but for right now it seems that our facebook page is the better place to discuss new ideas and upcoming events.
<p>
We're remaing on the cefns server only because it's easier than having to deal with a paid site.
</p>
	
    </div>

<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>

<!--Footer-->

<?php include_once('footer.php');?>



</body>
</html>


