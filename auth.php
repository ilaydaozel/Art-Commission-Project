<?php
session_start();

extract($_REQUEST, EXTR_SKIP);
 
$con = mysqli_connect("localhost", "root", "") or die ("Couldn't open connection");
mysqli_select_db( $con, "customers" );

$user_check= mysqli_query($con, "SELECT * FROM information WHERE email='$email' and password='$password'");

if (isset($_POST["login"])){
	if ((isset($_POST["email"])) && (isset($_POST["password"]) ) && mysqli_num_rows($user_check)){
		$user_record = mysqli_fetch_row( $user_check );
		$user_array=array("id"=>$user_record[0], "name"=>$user_record[1],"surname"=>$user_record[2],"address"=>$user_record[3],"email"=>$user_record[4],"password"=>$user_record[5]);
		$_SESSION["Authenticated"] = $user_array;
		header("Location: home.php");
}
	else{
		$_SESSION["Authenticated"] = 0;
		header("Location: login.php");
}
	session_write_close();

	}

	if (isset($_GET["logout"])){
		session_destroy();
		header("Location: login.php");
	}
?>