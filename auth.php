<?php
session_start();
/* this is a file to authenticate users and save their informations to the database*/
extract($_REQUEST, EXTR_SKIP);

	$host= 'eu-cdbr-west-02.cleardb.net';
	$username= 'b893d69c34f150';
	$password= '551cfc91';

/*checks if the email and password combination exists in database*/
	$con = mysqli_connect($host, $username, $password) or die ("Couldn't open connection");
	mysqli_select_db( $con, "heroku_a4c26417a470e78" );
	$user_check= mysqli_query($con, "SELECT * FROM information WHERE email='$email' AND password='$password'");


if (isset($_POST["login"])){
	if ((isset($_POST["email"])) && (isset($_POST["password"]) ) && mysqli_num_rows($user_check)){
		/*if the user exists in database, then user array is created and assigned to the session. In this way the user infos are easily reachable in other files.*/
		$user_record = mysqli_fetch_row( $user_check );
		$user_array=array("id"=>$user_record[0], "name"=>$user_record[1],"surname"=>$user_record[2],"address"=>$user_record[3],"email"=>$user_record[4],"password"=>$user_record[5]);
		$_SESSION["Authenticated"] = $user_array;
}
	else{
		/*if the user doesn'texists in database, then not authenticated. */
		$_SESSION["Authenticated"] = 0;

}
	session_write_close();
	header("Location: loggedin.php");
	}

	if (isset($_GET["logout"])){
		session_destroy();
		header("Location: login.php");
	}
?>