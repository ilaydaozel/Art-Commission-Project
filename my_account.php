<?php
session_start();
//this page is a guide for users to reach to the link references below
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
<a href=change_address.php><font color="black" size="+3">CHANGE ADDRESS</font></h1></a>
</div>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=change_email.php><font color="black" size="+3">CHANGE EMAIL</font></h1></a>
</div>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<a href=signout.php><font color="black" size="+3">SIGN OUT</font></h1></a>
</div>

<?php include("footer.inc");?>
</body>
</html>
