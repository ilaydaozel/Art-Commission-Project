<?php
   session_start();
   $user_array=$_SESSION["Authenticated"];

?>

<?php

	if (isset($_POST['submit'])){ 
		$user_id=$user_array['id'];

		$host= 'eu-cdbr-west-02.cleardb.net';
		$username= 'b893d69c34f150';
		$host_password= '551cfc91';
        //if user wants to sign out user's data is deleted from the database
		$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
		mysqli_select_db( $con, "heroku_a4c26417a470e78" );

		$user_delete= mysqli_query($con, "DELETE FROM information WHERE id='$user_id'");
		session_destroy();
		mysqli_close($con);
			
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