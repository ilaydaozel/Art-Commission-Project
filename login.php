<?php 
session_start();
?>
<html>
<head>
<title>Log in</title>
</head>

<body>
<?php include("header.inc");
#if user is could not be authenticated than wrong email message is sent.
	if (isset($_SESSION["Authenticated"]) && ($_SESSION["Authenticated"] == 0)){ ?>
<center>	
<div align=center style="background-color:black; width:50%; height:5%;" > 
<font size="+2" color="white" > WRONG E-MAIL OR PASSWORD </font><br/>
</div></center>	
<?php	}	
?>

<center>
<h2> LOG IN</h2>
<form action="auth.php" method="post">

<div style="background-color:#d6ccc2; width:50%; height:12%;" > 
<font size="+2"> E-MAIL:</font><br>
<input type="email" name="email">
<br/></div>
</br></br>

<div style="background-color:#ebfbff; width:50%; height:12%;" > 
<font size="+2"> PASSWORD:</font><br/>
<input type="password" name="password"><br />
</div>
</br></br>


<input type="submit" value="Log in" name="login" style="height:10%; width:15%; background-color:black; color:white;"> 
<input type="reset" value="Reset" style="height:10%; width:15%; background-color:black; color:white;">
</br></br></br>
DONT HAVE AN ACCOUNT?</br>
<div style="background-color:#d6ccc2; width:20%; height:5%;"> <a href="signup.php"> <font color="white" size="+1"> SIGN UP </font></a></div>

</form>
</center>
<?php include("footer.inc"); ?>
</body>
</html>