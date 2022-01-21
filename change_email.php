<?php
   session_start();
	$user_array=$_SESSION["Authenticated"];

?>

<?php


if ( isset($_POST['submit'])){ 
 $user_id=$user_array['id'];
 $new_email=$_POST['email'];
 $email_message="";

$host= 'eu-cdbr-west-02.cleardb.net';
$username= 'b893d69c34f150';
$password= '551cfc91';

$con = mysqli_connect($host, $username, $password) or die ("Couldn't open connection");
mysqli_select_db( $con, "heroku_a4c26417a470e78" );


 $mail_check = mysqli_query($con, "SELECT * FROM information WHERE email='$new_email'");	
    //if email is taken by another user, then email can'be updated
	if(mysqli_num_rows($mail_check) !=0){
		$email_message="<font color='red' size='1px'>Your e-mail can not be updated. This email is already in use.</font>";
	}	
	else{ 
	    //if new email is available, then update email in user database and if the user had ordered something before, update also in order database 
		$mail_update= mysqli_query($con, "UPDATE information SET email='$new_email' WHERE id='$user_id'");
		if(mysqli_query($con, "SELECT * FROM order_information WHERE customer_id='$user_id'")){
			$order_mail_update= mysqli_query($con, "UPDATE order_information SET customer_email='$new_email' WHERE customer_id='$user_id'");
		}
		//also update in session data
		$user_array['email']=$new_email;
		$_SESSION["Authenticated"]['email']=$new_email;
		$email_message="<font size='1px'> Successfully updated your e-mail. </font>";
		}	
	
	

}?>
 
<html><head><title>User Information</title>
<body>
<?php include("header.inc");?>
<div align="center">
<h2 align= center> CHANGE E-MAIL </h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<br/>
	<br />
	<div style="background-color:#ebfbff; width:50%; height:15%;" > 
	 <font size="+2"> USER	EMAIL:<textarea name="email" rows=1 cols=70><?php echo $user_array["email"]?></textarea></font>
	<br />
	<?php if ( isset($_POST['submit'])) echo $email_message; ?>
	</div>
	<br/>
	<br />
	<input type="submit" name="submit" value="Save Changes" style="height:10%; width:20%; background-color:black; color:white;">
	</form>
	
	<?php include("footer.inc");?>

</div>
</body>
</html>