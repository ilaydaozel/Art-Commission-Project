<?php 
session_start();
?>
<html><head><title>Logged in!</title></head>
<body>
<?php include("header.inc");
	if (isset($_SESSION["Authenticated"]) && ($_SESSION["Authenticated"] != 0)){
	    header("Location: home.php");
}
else{
	header("Location: login.php");
}
include("footer.inc");
?>
</body>
</html>