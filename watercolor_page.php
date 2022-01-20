<?php
session_start();
require_once("library.php");
?>
<html><head>
<title>Watercolor Portrait</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");?>

<br/>


<div style="border: black; border-width:2px; border-style:solid; margin:10px;  float:right; width:30%; height:200px; padding: 20px;">
<h2>
		There are just 3 steps:</br>
		<ol>
		<li>Upload your image</br></li>
		<li>Specify your order</br></li>
		<li>Give the order</br></li>
		</ol>
</h2></div>
		
<div >
<h2 align= center> WATERCOLOR PORTRAIT GALLERY </h2>
 <br>
 <img src="water_1.jpg" width=10% > </img>
  <img src="water_4.jpg" width=10% > </img>
 <img src="water_2.jpg" width=10% > </img>
 <img src="water_3.jpg"  width=10% > </img>
 <img src="water_5.jpg"  width=15% > </img>
 <a style="color:black;" href="gallery.php"><b> GALLERY >> </b></a>
</div>

<br/><br/><br/>
<br/>
<center>
<div style="background-color:black; width:20%; height:8%;">
<a  href=watercolor_form.php> <font color="white" size="+3"> ORDER NOW </font></a>
</div>
<br/><br/><br/>
<br/>
<br/>

<table>
<caption><font size="+2">WATERCOLOR PORTRAIT</caption> 
<td> 
<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Small</h2></legend>
	DIN A4 (29,7 X 21CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A4", "watercolor");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A4","watercolor");?> $<br/>
	<br/>
	<br/></h3>
</fieldset>
 </td>
<td>
	<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Medium</h2></legend>
	DIN A3 (42 X 30CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A3","watercolor");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A3","watercolor");?> $<br/>
	3 Persons <?php echo calculate_price(3, "A3","watercolor");?> $<br/>
	<br/></h3>
	</fieldset>

</td>
<td>
	<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Large</h2></legend>
	DIN A2 (60 X 40CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A2","watercolor");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A2","watercolor");?> $<br/>
	3 Persons <?php echo calculate_price(3, "A2","watercolor");?> $<br/>
	4 Persons <?php echo calculate_price(4, "A2","watercolor");?> $<br/></h3>
	</fieldset>

</td>
</table>
</br>




<?php include("footer.inc");?>
</body>
</html>
