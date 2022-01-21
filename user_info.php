<?php
   session_start();
	$user_array=$_SESSION["Authenticated"];

?>
 
<html><head><title>User Information</title>
<body>
<?php include("header.inc");?>
<div align="center">
<h2 align= center> USER INFORMATION </h2>

	 <div style="background-color:#d6ccc2; width:50%; height:5%;" > 
	 <font size="+2"> USER NAME: <?php echo $user_array["name"];?></font>
	 </div>
	<br />
	<br/>
	
	<div style="background-color:#d6ccc2; width:50%; height:5%;" > 
	 <font size="+2"> USER SURNAME: <?php echo $user_array["surname"];?></font>
	 </div>

	<br /><br/>
		
	<div style="background-color:#d6ccc2; width:50%; height:15%;" > 
	 <font size="+2"> USER ADDRESS: <?php echo $user_array["address"];?></font>
	 </div>

	<br/><br />
	<div style="background-color:#d6ccc2; width:50%; height:5%;" > 
	 <font size="+2"> USER EMAIL: <?php echo $user_array["email"];?></font>
	 </div>
	<?php include("footer.inc");?>

</div>
</body>
</html>