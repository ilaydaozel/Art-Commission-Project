<?php session_start();?>
<html><head>
<title>Pencil Portrait Order Form
</title>
</head>

<body >
<?php include("header.inc");
//if the user is logged in, enable the order form
if (isset($_SESSION["Authenticated"]) && ($_SESSION["Authenticated"] != 0)){
?>
<form enctype="multipart/form-data" action="pencil_order.php" method="POST">
<center><h1> Order Your Pencil Portrait </h1></center> 

<fieldset style="background-color:ebfbff;">
<legend> <h3> Upload Your Image </h3></legend>
<input name="picture_file" type="file"/>
</fieldset>	
<p>
<fieldset style="background-color:ebfbff;">
<legend><h3>Select Person Amount</h3></legend>
	
	<input type="radio" name="person_amount" id="1Option" value="1"	/>
	<label for="1Option">1 (availabe for small, medium and large sizes)</label><br>
	<input type="radio" name="person_amount" id="2Option" value="2"	/>
	<label for="2Option">2 (availabe for small, medium and large sizes)</label>	<br>
	<input type="radio" name="person_amount" id="3Option" value="3"	/>
	<label for="3Option">3 (availabe for medium and large sizes)</label><br>	
	<input type="radio" name="person_amount" id="4Option" value="4"	/>
	<label for="4Option">4 (availabe for large size)</label><br>	

</fieldset>	


<p>

<fieldset style="background-color:ebfbff;">
<legend> <h3> Select Size </h3></legend>

	<input type="radio" name="paper_size" id="a4Option" value="A4"	/>
	<label for="a4Option">Small (A4)</label>
	<br>
	<input type="radio" name="paper_size" id="a3Option" value="A3"	/>
	<label for="a3Option">Medium (A3)</label>
	<br>
	<input type="radio" name="paper_size" id="a2Option" value="A2"	/>
	<label for="a2Option">Large (A2)</label>
</fieldset>	
	
	
<h3>Additional Comments </h3>
<textarea name="comment" rows=5 cols=100></textarea><p>

<input type="submit" name='submit' value="View Your Order" style="height:10%; width:20%; background-color:black; color:white;"/>
<input type="reset" name='reset' value="Clear Your Preferences" style="height:10%; width:20%; background-color:black; color:white;" />
</form>
<?php
}
//if the user is not logged in, disable the order form
else{
?>	<br/>
	<center>
	 <div style="background-color:#d6ccc2; width:50%; height:8%;" > 
	 <font size="+3">YOU ARE NOT LOGGED IN.</font>
	 </div>
	 <br/>
	 <div style="background-color:#ebfbff; width:50%; height:10%;" > 
	 <font size="+2">You cannot view protected content. <br/>
	 If you don't have an account please sign up.</font>
	 </div>
<?php
}
include("footer.inc");
?>
</body>
</html>