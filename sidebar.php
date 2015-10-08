<?php
//template
$text = <<<MARKER
<div id="pageholdframe">
<!--content here-->

<div id="navigationBar">
	<div id="menuArea">
		<!--This is a normal menu item with no sub items-->
		<div class="menuItem">
			<span><a href="index.php" class="header">Home</a></span>
		</div>                                        
		<div class="menuItem">
			<span class="header">Projects</span>
			<!--This is a menu item with sub items-->
			<div class="menuSubItems">
				<span><a href="Current_projects.php" class="header">Current Projects</a></span><br />
				<span><a href="Future_projects.php" class="header">Future Projects</a></span><br />
				<span><a href="Past_projects.php" class="header">Past Projects</a></span><br />
			</div>
		</div>                                       
		<div class="menuItem">
			<span><a href="Meeting_times.php" class="header">Meeting Times</a></span>
		</div>
		<div class="menuItem">			
			<span><a href="About.php" class="header">About Us</a></span>
		</div>
		<div class="menuItem">			
			<span><a href="Contact_us.php" class="header">Contact Us</a></span>
		</div>
	</div>
</div>




MARKER;

echo $text;
?>
