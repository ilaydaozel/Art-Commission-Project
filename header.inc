	<div>
	<div style="background-color:#d6ccc2; " >
     <br/>
	 <h4 align="right">	 
	 <?php
	 /*if ypu are logged in , then the website shows ypu log out and my account options.If you are not logged in then, the log in and sign up options are shown.*/
		if (isset($_SESSION["Authenticated"]) && ($_SESSION["Authenticated"] != 0)){
			$user_array=$_SESSION["Authenticated"];
			echo "Welcome ".$user_array["name"]." ".$user_array["surname"];
		?>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color:black" href="auth.php?logout">LOG OUT </a>
		    &nbsp;&nbsp;|
			&nbsp;
			<a style="color:black"href="my_account.php">MY ACCOUNT</a>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    
	   <?php }
	   else{?>
		   <a style="color:white" href="login.php">LOG IN</a>
		   &nbsp;&nbsp;&nbsp;|
		   &nbsp;&nbsp;
		   <a style="color:black" href="signup.php">SIGN UP</a>
	   <?php }?>
	   </h4>
	   </div>
	<div >
	<br/>
 	 <a href="home.php"><img src="logo.jpg" alt="logo" width="70" align="left"> </img></a>
	 </br>
	 <div >
	 &nbsp;&nbsp;&nbsp;
	 <font size="6" style="bold" color="black">A</font>
	 <font size="6" style="bold" color=#d6ccc2>R</font>
	 <font size="6" style="bold" color="black">T I Y E</font>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <strong>
	  <font size="3" style="bold" color="black">
	  <a style="color:black" href="home.php">HOME</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color:black" href="pencil_page.php">PENCIL PORTRAIT</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a style="color:black" href="watercolor_page.php">WATERCOLOR PORTRAIT</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="color:black" href="price.php">PRICES</a>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	  <a style="color:black" href="gallery.php">GALLERY</a>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	  </font><br/></br></strong>
	  </br>
	  </div>
</div>
<hr> 
</div>
