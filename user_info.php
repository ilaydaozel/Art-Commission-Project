<?php
   session_start();
	$user_array=$_SESSION["Authenticated"];

?>

<?php

//kendi kendini process eden formlar, ayrıca bi php dosyası gerekmiyo
if ( isset($_POST['submit'])){ // Was the form submitted?
 $old_address=$user_array['address'];
 $user_id=$user_array['id'];
 $new_address=$_POST['address'];
 $new_email=$_POST['email'];
 $email_message="";
 $address_message="";

$host= 'eu-cdbr-west-02.cleardb.net';
$username= 'b893d69c34f150';
$password= '551cfc91';

$con = mysqli_connect($host, $username, $password) or die ("Couldn't open connection");
mysqli_select_db( $con, "heroku_a4c26417a470e78" );


 $mail_check = mysqli_query($con, "SELECT * FROM information WHERE email='$new_email'");	
	if(mysqli_num_rows($mail_check) !=0){
		$email_message="<font color='red' size='1px'>Your e-mail can not be updated. This email is already in use.</font>";
	}	
	else{ 
		$mail_update= mysqli_query($con, "UPDATE information SET email='$new_email' WHERE id='$user_id'");
		$check=mysqli_query($con, "SELECT * FROM customer_information WHERE customer_id='$user_id'")
		if(mysqli_fetch_row($check)){
			$order_mail_update= mysqli_query($con, "UPDATE order_information SET customer_email='$new_email' WHERE customer_id='$user_id'");
		}
		$user_array['email']=$new_email;
		$_SESSION["Authenticated"]['email']=$new_email;
		$email_message="<font size='1px'> Successfully updated your e-mail. </font>";
		}	
		
	if($new_address==$old_address){
		$address_message="<font size='1px'>There is no update in your address. </font>";
	}	
	else{ 
		$address_update= mysqli_query($con, "UPDATE information SET address='$new_address' WHERE id='$user_id'");
		if(mysqli_query($con, "SELECT * FROM customer_information WHERE customer_id='$user_id'")){
			$order_address_update= mysqli_query($con, "UPDATE order_information SET customer_address='$new_' WHERE customer_id='$user_id'");
		}
		$user_array['address']=$new_address;
		$_SESSION["Authenticated"]['address']=$new_address;
		$address_message="<font size='1px'>Successfully updated your address.</font>";
		}		
	
	
	

}?>
 
<html><head><title>User Information</title>
<body>
<?php include("header.inc");?>
<div align="center">
<h2 align= center> USER INFORMATION </h2>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 <div style="background-color:#d6ccc2; width:50%; height:5%;" > 
	 <font size="+2"> USER NAME: <?php echo $user_array["name"];?></font>
	 </div>
	<br />
	<br/>
	
	<div style="background-color:#d6ccc2; width:50%; height:5%;" > 
	 <font size="+2"> USER SURNAME: <?php echo $user_array["surname"];?></font>
	 </div>

	<br />
	<br/>
	<div style="background-color:#ebfbff; width:50%; height:25%;" > 
	 <font size="+2"> USER	ADDRESS: <textarea name="address" rows=5 cols=70><?php echo $user_array["address"]?></textarea></font>
	 <br />
	<?php if ( isset($_POST['submit'])) echo $address_message; ?>
	 </div>

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