<?php
   session_start();
	$user_array=$_SESSION["Authenticated"];

?>

<?php

//kendi kendini process eden formlar, ayrıca bi php dosyası gerekmiyo
if ( isset($_POST['submit'])){ // Was the form submitted?
 $user_password=$user_array['password'];
 $old_password=$_POST['old_password'];
 $new_password=$_POST['new_password'];
 $old_password_message="";
 $new_password_message="";
 $user_id=$user_array['id'];

	$host= 'eu-cdbr-west-02.cleardb.net';
	$username= 'b893d69c34f150';
	$password= '551cfc91';

	$con = mysqli_connect($host, $username, $password) or die ("Couldn't open connection");
	mysqli_select_db( $con, "heroku_a4c26417a470e78" );

	if($_POST['old_password'] == ""){
		$old_password_message="<font size='1px' color='red'>Please enter your old password.</font>";}
		
	else{
		if(($_POST['new_password'] != "")&&(strlen($_POST['new_password'])<6)){
			$new_password_message="<font color='red' size='1px'> The password length must be longer than 5 characters.</font>";
		}
		else if($_POST['new_password'] == ""){
			$new_password_message="<font size='1px' color='red'>Enter a valid new password.</font>";
		}
		else{
			if($user_password!=$old_password){
				$old_password_message="<font size='1px' color='red'>Your old password is wrong. </font>";
			}	
			else{ 
				 $old_password=$_POST['old_password'];
				$new_password=$_POST['new_password'];
				$password_update= mysqli_query($con, "UPDATE information SET password='$new_password' WHERE id='$user_id'");
				$user_array['password']=$new_password;
				$_SESSION["Authenticated"]['password']=$new_password;
				$new_password_message="<font size='2px'>Your password is successfully updated.</font>";

				}		
		}
	}	
				
}	
?>
 
<html><head><title>Change Password</title>
<body><div align="center">
<?php include("header.inc");?>
<h2 align= center> CHANGE PASSWORD </h2>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	
	<div style="background-color:#d6ccc2; width:50%; height:15%;" > 
	 <font size="+2"> ENTER OLD PASSWORD:  <br /><br />
	<input type="password" name="old_password">
	<br />
	<?php if ( isset($_POST['submit'])) echo $old_password_message; ?>
	</font></div>
	
	<br />
	<br/>
	<div style="background-color:#ebfbff; width:50%; height:25%;" > 
	 <font size="+2"> ENTER NEW PASSWORD:  <br /><br /></font>
    <font size='2px'>(*Your password should be at least 5 characters long)</font>
	<br/><font color='green'>
	<?php if ( isset($_POST['submit'])) echo $new_password_message; ?></br></font>
	<input type="password" name="new_password">
	</div>
	<br />

	<input type="submit" name="submit" value="Change Password" style="height:10%; width:20%; background-color:black; color:white;">
	</form>
	
<?php include("footer.inc");?>

</div>
</body>
</html>