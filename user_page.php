<?php
session_start();
?>
<html><head>
<title>User Page</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");?>
</br></br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=order_info.php><font color="black" size="+3">MY ORDERS</font></h1></a>
</div>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=user_info.php><font color="black" size="+3">USER INFORMATION</font></h1></a>
</div>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=change_password.php><font color="black" size="+3">CHANGE PASSWORD</font></h1></a>
</div>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=signout.php><font color="black" size="+3">SIGN OUT</font></h1></a>
</div>

<?php include("footer.inc");?>
</body>
</html>
