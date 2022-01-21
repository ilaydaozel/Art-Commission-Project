<?php
session_start();
require_once("library.php");
//this page showcases the photos
?>
<html><head>
<title>Pencil Portrait</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");?>

<div >
<h2 align= center> PENCIL PORTRAIT GALLERY </h2>
 <br>
 <img src="pencil_göktay.jpg"  height="300" > </img>
 <img src="pencil_tolga.jpg"  height="300" > </img>
 <img src="pencil_girl.jpg"  height="300" > </img>
 <img src="pencil_kid.jpg"  height="300" > </img>
 <img src="pencil_1.jpeg"  height="300" > </img>
 <img src="pencil_oldman.jpg"  height="300" > </img>

</div>
<hr/>


<div >
<h2 align= center> WATERCOLOR PORTRAIT GALLERY </h2>
 <br>
 <img src="water_1.jpg"  height="300" > </img>
 <img src="water_2.jpg"  height="300" > </img>
 <img src="water_3.jpg"  height="300"> </img>
 <img src="water_4.jpg"  height="300" > </img>
 <img src="water_6.jpg"  height="300" > </img>
 <img src="water_5.jpg"  height="300" > </img>
</div>
<hr/>

<div >
<h2 align= center>  MAKING OF AN ARTWORK </h2>
 <br>
 <h2>
 </br>
 1st Step= Preparation
 </br>
 </br>
 <img src="process2.jpeg"  height="300" > </img>
 <img src="process1.jpeg"  height="300" > </img>
 </br>
 </br>
  2nd Step= Packaging
  </br>
  </br>
 <img src="water_5.jpg"  height="400" > </img>
  <img src="packaging.jpeg"  height="400" > </img>
  </br>
  </br>
  3rd Step= Delivery and Happy Faces :)
  </br>
  </br>
 <img src="process3.jpeg"  height="500"> </img>
 <img src="process4.jpeg"  height="500" > </img>
</h2>

</div>


<?php include("footer.inc");?>
</body>
</html>