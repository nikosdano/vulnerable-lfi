<?php
session_start();
?>
<html>
    <head>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
	<div class="menu">
	    <a href="index.php">Main Page</a>
	    <a href="index.php?view=about-us.html">About Us</a>
	    <a href="index.php?view=contact-us.html">Contact</a>
	    <a href="upload.html">Upload Your Picture</a/>
	</div>
<?php

if(!isset($_GET['view']) || ($_GET['view']=="index.php")) {
   echo" <p><b>Welcome to our main page!</b><br><br>You know we are the best of our kind, and this is why you are here! The 'Super Secure Company' is here for you. We guarantee 100% success to our security audit projects. Among other things, we organise your network, we reassure for the security of your devices and of course, we keep hackers away from your Web Application!</br></p>
    <img src='https://cdn.drawception.com/images/panels/2016/6-6/9wAKWbFZAz-8.png'>";
}
else {
	echo "<p>";
	include("/var/www/html/" .$_GET['view']);
	echo "</p>";
}
?>
    </body>
</html>
