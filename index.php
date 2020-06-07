<?php
/**
 * Guestbook of boothlinux.ca
 * 
 */
?>

<?php 
   require_once("boothlinuxGuestbook.class.php"); 
   $myGuestbook = new maxGuestbook();          
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guestbook</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	<div id="header"><div id="header_left"></div>
	<div id="header_main">Please sign our guestbook!</div><div id="header_right"></div></div>
    <div id="content">
         <?php $myGuestbook->processGuestbook(); ?>
    </div>
    <div id="footer"><a href="boothlinux.ca" target="_blank">Homepage</a></div>
</div>
</body>
</html> 
