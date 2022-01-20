<?php
   session_start();
   $user_array=$_SESSION["Authenticated"];

?>

<?php

//kendi kendini process eden formlar, ayrıca bi php dosyası gerekmiyo
	if (isset($_POST['submit'])){ // Was the form submitted?
		$user_id=$user_array['id'];

		$host= 'eu-cdbr-west-02.cleardb.net';
		$username= 'b893d69c34f150';
		$password= '551cfc91';

		$con = mysqli_connect($host, $username, $password) or die ("Couldn't open connection");
		mysqli_select_db( $con, "heroku_a4c26417a470e78" );

		$user_delete= mysqli_query($con, "DELETE FROM information WHERE id='$user_id'");
		session_destroy();
		mysqli_close($con);
		header("Location: pencil_page.php");
			
}	
?>
 
<html><head><title>Sign Out</title>
<body><div align="center">
<?php include("header.inc");?>
<h2>SIGN OUT</h2>

</form>
	<b>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Are you sure that you want to sign out? <br />
	<br/>
	<input type="submit" name="submit" value="Yes" style="height:10%; width:15%; background-color:black; color:white;">
	</form>
	
	
	<?php 
	if (isset($_POST['submit'])){?>
	<h1>You are signed out.</h1>
<?php } include("footer.inc");?>

</b>
</div>
</body>
</html>