
<?php
//start the session.
session_start();

$host = "tund"; //server
$user = "ngf4"; //root
$sqlpswd = "web212";//password
$dbase = "ngf4"; //database

$cxn = mysql_connect($host, $user, $sqlpswd) or die("<p>Couldn't connect to the server, Sorry for the inconvenience.</p>");
$cxnerror = mysql_select_db($dbase) or die("An Error has occured: " . mysql_error());

?>
