<?php
	session_start();
	$user_array=$_SESSION["Authenticated"];
	$customer_id=$user_array['id'];

	$host= 'eu-cdbr-west-02.cleardb.net';
	$username= 'b893d69c34f150';
	$host_password= '551cfc91';
    
	//checks if the user ordered something before 
	$con = mysqli_connect($host, $username, $host_password) or die ("Couldn't open connection");
	mysqli_select_db( $con, "heroku_a4c26417a470e78" );
 	$order_result= mysqli_query($con, "SELECT * FROM order_information WHERE customer_id='$customer_id'");
    
	$orders=array();
    //if user has orders in the database, then add the order informations to the orders array
	$i=0;
	while ($row = mysqli_fetch_row($order_result)) {
		$orders[$i]=$row;
		$i=$i+1;	
}

?>


 
<html><head><title>Order Information</title>
<body>
<?php include("header.inc");?>

<center>


</br></br>
<table border="4" bordercolor="black" cellpadding="20" width=100% align="center" > 
<caption><font color="black" size=+3> MY ORDERS </font></caption>
<tr bgcolor="ebfbff">
<th>Art Medium</th>
<th>Photo</th>
<th>Paper Size</th>
<th>Person Amount</th>
<th>Comment</th>
<th>Price</th>
<th>Address</th>
</tr>

<?php 
//show user orders in a table
foreach( $orders as $order){ ?>
		<tr>
		<td><?php echo $order[1] ?></td>
		<td><img src=<?php echo "'order_photos/".$order[2]."'"  ?> height="100px"></td>
		<td><?php echo $order[3] ?></td>
		<td><?php echo $order[4] ?></td>
		<td><?php echo $order[5] ?></td>
		<td><?php echo $order[6] ?></td>
		<td><?php echo $order[10] ?></td>
		</tr>
<?php	}
?>

</table>

	
<?php include("footer.inc");?>

</b>
</body>
</html>