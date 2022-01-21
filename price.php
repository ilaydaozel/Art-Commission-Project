<?php
session_start();
//this library provides the calculate_price($person_amount, $paper_size, $art_medium) function
require_once("library.php");
?>
<html><head>
<title>Prices</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");?>

<center></br>
<table>
<caption><font size="+2">PENCIL PORTRAIT</caption> 
<td> 
<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Small</h2></legend>
	DIN A4 (29,7 X 21CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A4", "pencil");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A4", "pencil");?> $<br/>
	<br/>
	<br/></h3>
</fieldset>
 </td>
<td>
	<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Medium</h2></legend>
	DIN A3 (42 X 30CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A3", "pencil");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A3", "pencil");?> $<br/>
	3 Persons <?php echo calculate_price(3, "A3", "pencil");?> $<br/>
	<br/></h3>
	</fieldset>

</td>
<td>
	<fieldset style="background-color:ebfbff; padding:40px;" >
	<legend><h2>Large</h2></legend>
	DIN A2 (60 X 40CM) <br/>
	<h3>1 Person  <?php echo calculate_price(1, "A2", "pencil");?> $<br/>
	2 Persons <?php echo calculate_price(2, "A2", "pencil");?> $<br/>
	3 Persons <?php echo calculate_price(3, "A2", "pencil");?> $<br/>
	4 Persons <?php echo calculate_price(4, "A2", "pencil");?> $<br/></h3>
	</fieldset>

</td>
</table>
</br>
<hr>
</br>

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

</center>
<?php include("footer.inc");?>
</body>
</html>
