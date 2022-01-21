<?php 
session_start();
?>
<html><head><title>Logged in!</title></head>
<body>
<?php include("header.inc");
/*if you are authenticated, which means if you are logged in , then it directions you to the homepage*/
if (isset($_SESSION["Authenticated"]) && ($_SESSION["Authenticated"] != 0)){
	    header("Location: home.php");
		
}
else{
	/*if you are not authenticated, then you will be directioned to the log in page again*/
	header("Location: login.php");
}
include("footer.inc");
?>
</body>
</html>