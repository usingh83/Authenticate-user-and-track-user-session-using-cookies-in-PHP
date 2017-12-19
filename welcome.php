<!doctype html>
<head>
</head>
<body>
<?php
	session_start();
	if (isset($_SESSION['$username'])) {
        	$loggenOnUser = $_SESSION['$username'];
         	echo "Welcome: ", $_SESSION['$name'], "<br />";
	} 
	else {
        	$loggenOnUser = " a public user";
	}
?>
<div class="gridContainer clearfix">
    <div id="div1" class="fluid"> This page is being called by my login.php file.
    </div>
    <div id="LoggedInUser" class="fluid ">Hi.  Your username is <?php echo $loggenOnUser;?>			    </div>
</div>
</body>
</html>
 