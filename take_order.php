<?php
session_start();
$order=$_SESSION['Order'];?>

<html><head>
<title>Take Order</title>
</head>

<body bgcolor= "white">
<?php include("header.inc");

extract($_REQUEST, EXTR_SKIP);
//takes order infos from order session and assigns them to variables
$customer_id=$order['customer_id'];
$art_medium=$order['art_medium'];
$photo=$order['photo'];
$paper_size=$order['paper_size'];
$person_amount=$order['person_amount'];
$comment=$order['comment'];
$price=$order['price'];
$customer_name=$order['customer_name']; 
$customer_surname=$order['customer_surname']; 
$customer_address=$order['customer_address']; 
$customer_email=$order['customer_email']; 

$host= 'eu-cdbr-west-02.cleardb.net';
$username= 'b893d69c34f150';
$host_password= '551cfc91';

//order informations are inserted into the database
$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
mysqli_select_db( $con, "heroku_a4c26417a470e78" );
$clean_comment=mysqli_real_escape_string($con, $comment);
mysqli_query( $con,"INSERT INTO order_information (art_medium, photo, paper_size, person_amount, comment, price, customer_id, customer_name, customer_surname, customer_address, customer_email ) ". "VALUES ('$art_medium', '$photo' , '$paper_size', '$person_amount', '$clean_comment', '$price', '$customer_id', '$customer_name','$customer_surname','$customer_address','$customer_email')");

//here file i/o operation is made. A file named customer_orders.txt is created if it didn't exist and order informations are written into the txt file
$handle=fopen("customer_orders.txt", "a");
$order_line="Customer id:".$customer_id.", Customer name:".$customer_name.", Customer surname:".$customer_surname.", Customer address:".$customer_address.", Customer email:".$customer_email.", Medium:".$art_medium.", Photo:".$photo.", Paper size:".$paper_size.", Person amount:".$person_amount.", Comment:".$clean_comment.", Price:".$price."\n";
fwrite($handle, $order_line);
fclose($handle);

?>

<font color="green" size="+2">YOUR ORDER IS SUCCESSFULY TAKEN.</font></br></br>
<font color="black" size="+2">ORDER NUMBER: 
<?php 
	//order id is fetched from database.Since order id is primary key, it is unique for every order, which decreases misunderstandings in payments.
	 $num_result = mysqli_query($con, "SELECT order_id FROM order_information WHERE customer_id='$customer_id' AND art_medium='$art_medium' AND photo='$photo' AND  paper_size='$paper_size' AND person_amount='$person_amount' AND comment='$comment'");
	 $row=mysqli_fetch_assoc($num_result);
	 echo $row["order_id"];
	 ?>
 </font></br></br>

<div  style="background-color:#d6ccc2; width:100%; height:20%;">
<font color="black" size="+2">YOUR ORDER IS GOING TO BE SENT TO THIS ADDRESS:</font></br>

<?php 
     //shows customer's address to decrease misunderstandings by shipping
	 $address_result = mysqli_query($con, "SELECT address FROM information WHERE id='$customer_id'");
	 $row=mysqli_fetch_assoc($address_result);
	 echo $row["address"];
	 
	 ?>
	 </br>
	 If you want to update your address, you can go to <a style="color:black;" href="user_info.php">My Account >> User Information<a>.
</div></br></br>

<div  style="background-color:#ebfbff; width:100%; height:30%;">
<font color="black" size="+2">YOUR ORDER IS GOING TO BE STARTED AFTER YOU COMPLETE YOUR PAYMENT TO THIS BANK ACCOUNT:</font></br></br>
<font color="black" size="+2">
Bank Name: T********** I* B****** <br/>
Account Holder: I****** O***** <br/>
Account Number: 554**************** <br/>
Description: Your name surname and order number
</font>
</div></br></br>

<font color="green" size="+2">YOU CAN VIEW YOUR ORDER IN <a style="color:black;" href="order_info.php">My Account >> My Orders<a>.</font>
<?php include("footer.inc");?>
</body>
</html>
 


