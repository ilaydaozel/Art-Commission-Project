<?php
   session_start();
	$user_array=$_SESSION["Authenticated"];

?>

<?php


if ( isset($_POST['submit'])){ 
 $old_address=$user_array['address'];
 $user_id=$user_array['id'];
 $new_address=$_POST['address'];
 $address_message="";

$host= 'eu-cdbr-west-02.cleardb.net';
$username= 'b893d69c34f150';
$host_password= '551cfc91';

$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
mysqli_select_db( $con, "heroku_a4c26417a470e78" );

	//if there is no change in address, then don't update	
	if($new_address==$old_address){
		$address_message="<font size='1px'>There is no update in your address. </font>";
	}	
	else{ 
	    //Update address in user database and if the user had ordered something before, update also in order database 
		$address_update= mysqli_query($con, "UPDATE information SET address='$new_address' WHERE id='$user_id'");
		if(mysqli_query($con, "SELECT * FROM order_information WHERE customer_id='$user_id'")){
			$order_address_update= mysqli_query($con, "UPDATE order_information SET customer_address='$new_address' WHERE customer_id='$user_id'");
		}
		//also update in session data
		$user_array['address']=$new_address;
		$_SESSION["Authenticated"]['address']=$new_address;
		$address_message="<font size='1px'>Successfully updated your address.</font>";
		}		
	
	
	

}?>
 
<html><head><title>Change Address</title>
<body>
<?php include("header.inc");?>
<div align="center">
<h2 align= center> CHANGE ADDRESS</h2>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<br />
	<br/>
	<div style="background-color:#ebfbff; width:50%; height:25%;" > 
	 <font size="+2"> USER	ADDRESS: <textarea name="address" rows=5 cols=70><?php echo $user_array["address"]?></textarea></font>
	 <br />
	<?php if ( isset($_POST['submit'])) echo $address_message; ?>
	 </div>

	<br/>
	<br />
	<input type="submit" name="submit" value="Save Changes" style="height:10%; width:20%; background-color:black; color:white;">
	</form>
	
	<?php include("footer.inc");?>

</div>
</body>
</html>