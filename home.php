<?php
session_start();
require_once("library.php");
?>
<html><head>
<title>Home</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");?>

<br/>
		
<div  style="height:300px;">
 <br>
  <img src="pencil_oldman.jpg"  height="200" > </img>
 <img src="water_3.jpg"  height="200"> </img>
  <img src="pencil_girl.jpg"  height="200" > </img>
 <img src="water_1.jpg"  height="200" > </img>
 <img src="pencil_göktay.jpg" height="200"  > </img>
  <img src="water_2.jpg"  height="200" > </img>
 <img src="pencil_kid.jpg" height="200" > </img>

 <a style="color:black;" href="gallery.php"><b> GALLERY >> </b></a>
</div>



<div style="border: black; border-width:2px; border-style:solid; margin:10px;  float:right; width:30%; height:200px; padding: 20px;">
<h2>
		There are just 3 steps:</br>
		<ol>
		<li>Upload your image</br></li>
		<li>Specify your order</br></li>
		<li>Give the order</br></li>
		</ol>
</h2></div>
<br/>
<br/>
</br>

<align="right">
<div style="background-color:black; width:32%; height:8%;"> <a  href=pencil_page.php> <font color="white" size="+3"> ORDER PENCIL PORTRAIT </font></a></div>

</br>
</br>
</br>
</br>
<div style="background-color:black; width:40%; height:8%;"> <a  href=watercolor_page.php> <font color="white" size="+3"> ORDER WATERCOLOR PORTRAIT </font></a></div>
</align>
<br/><br/><br/>
<br/>
<br/></br>

<div align="left" style="border:black; border-width:1px; border-style:solid; padding:10px; height:350px; ">
<br/>
<h2>  GET TO KNOW THE ARTIST</h2>
 <img align="left" src="artist.jpeg" alt="artist's photo" width="200" style="padding:20px" > </img>
 <font size="+2" style="bold" >
 <p>
 My name is Ilayda Ozel. I am a student of the Izmır Instıtute of Technology in Izmir, Turkey. Currently I am in the 4th year of my bachelor's education. 
 I have been always passionate about art.Although I don't have an professional education, my mother Atiye Özel taught me the basics of the drawing at home. I have always got inspired by her, 
 which lead me to get also inspired for the name of my website.
 I love to create artworks through my emotions and thoughts, 
 so all of my artworks are a part of my inner world. I am so happy to be able to share a piece of me with you through this website.
 Thank you for supporting me.
 </p>
 </font>
</div>
</br>

<div >
<h2 align= center> MAKING OF AN ARTWORK </h2>
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