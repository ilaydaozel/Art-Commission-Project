<?php
   session_start();

?>

<html><head><title>Sign up</title>
<body><div >
<?php include("header.inc");

$name="";
$surname="";
$address="";
$email="";
$password="";
extract($_REQUEST, EXTR_SKIP);
$errors=array();  //initialize an errors array 
if(isset($_REQUEST['submit'])){ // If the form was submitted
//trims the message and add slashes if there is a ', done for the security reasons
  if(isset($_POST['name']) && $_POST['name'] != "") {
    $name=trim(addslashes($_POST['name'])); }
  if(isset($_POST['surname']) && $_POST['surname'] != "") {
    $surname = trim(addslashes($_POST['surname'])); }
  if(isset($_POST['address']) && $_POST['address'] != "") {
    $address = trim(addslashes($_POST['address'])); }
  if(isset($_POST['email']) && $_POST['email'] != "") {
    $email = trim(addslashes($_POST['email'])); }
  if(isset($_POST['password']) && $_POST['password'] != "") {
    $password = trim(addslashes($_POST['password'])); }	
  validate_input(); // Check for empty fields
  if(count($errors) != 0){ // If there are errors, display form with the error messages
		display_form();}
  else{
	  //if there are no errors save user informations to database
	$host= 'eu-cdbr-west-02.cleardb.net';
	$username= 'b893d69c34f150';
	$host_password= '551cfc91';

	$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
	mysqli_select_db( $con, "heroku_a4c26417a470e78" );
		mysqli_query( $con,"INSERT INTO information (name, surname, address, email, password) ". "VALUES ('$name', '$surname' , '$address', '$email', '$password') ");
		echo "<h2> WELCOME TO ARTIYE ".$name." ".$surname."!";
		echo "<h2>YOU HAVE SUCCESSFULLY REGISTERED<h2/>";	
		echo "<h2>NOW YOU NEED TO LOG IN<h2/>";
	}
}
else{display_form();} // Display the form for the first time

function validate_input(){
  global $errors;
  //error messages that will appear
  if($_POST['name'] == ""){
     $errors['name']="<font color='red' size='1px'> Please fill in the required information.</font>";
	}
  if($_POST['surname'] == ""){
	$errors['surname']="<font color='red' size='1px'> Please fill in the required information.</font>";
    }
  if($_POST['address'] == ""){
	$errors['address']="<font color='red' size='1px'> Please fill in the required information.</font>";
    }
  if($_POST['email'] == ""){
	$errors['email']="<font color='red' size='1px'> Please fill in the required information.</font>";
    }
  if($_POST['email'] != ""){
	 $mail=$_POST['email'];

	$host= 'eu-cdbr-west-02.cleardb.net';
	$username= 'b893d69c34f150';
	$host_password= '551cfc91';
//checks if the email is given by another user before, since email is used as username, it should be unique for every user.
	$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
	mysqli_select_db( $con, "heroku_a4c26417a470e78" );
	 $mail_check = mysqli_query($con, "SELECT * FROM information WHERE email='$mail'");	
	if(mysqli_num_rows($mail_check) !=0){
		$errors['email']="<font color='red' size='1px'> This e-mail is already in use. Please sign in with another e-mail.</font>";}
  }
  if(($_POST['password'] == "")){
	$errors['password']="<font color='red' size='1px'> Please fill in the required information.</font>";
    }	
	//checks if the password requirement is met
   if(($_POST['password'] != "")&&(strlen($_POST['password'])<6)){
	$errors['password']="<font color='red' size='1px'> The password length must be longer than 5 characters.</font>";
    }	
}

function display_form(){
	global $errors;
	?>
	<center>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+2"> NAME:</font>
	 <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
	<br />
	<?php if(array_key_exists("name",$errors)) echo $errors['name']; ?>
	<br />
	 </div><br />

	<div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+2"> SURNAME:</font>
	<input type="text" name="surname" value="<?php if (isset($_POST['surname'])) echo $_POST['surname'];?>">
	<br />
	<?php if(array_key_exists("surname",$errors))echo $errors['surname']; ?>
	<br />
	 </div><br />

	<div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+2"> ADDRESS:</font>
	<input type="text" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>">
	<br />
	<?php if(array_key_exists("address",$errors))echo $errors['address']; ?>
	<br />
	 </div><br />


	<div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+2"> E-MAIL:</font>
	<input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>">
	<br />
	<?php if(array_key_exists("email",$errors)) echo $errors['email']; ?>
	<br />
	 </div><br />


	<div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+2"> PASSWORD:</font>
	<font size='2px'>(Your password should be at least 5 characters long)</font>
	<input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
	<br />
	<?php if(array_key_exists("password",$errors)) echo $errors['password']; ?>
	<br />
	 </div><br />
	 


	<input type="submit" name="submit" value="Submit" style="height:10%; width:15%; background-color:black; color:white;">
	<input type="reset" name="reset" value="Reset" style="height:10%; width:15%; background-color:black; color:white;">
	</form>
	<?php
    }?>

</div>
<?php include("footer.inc");?>
</body>
</html>
	