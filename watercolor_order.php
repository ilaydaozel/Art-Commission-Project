<?php
   session_start();
   //this library provides the calculate_price($person_amount, $paper_size, $art_medium) function
   include("library.php");
   $user=$_SESSION['Authenticated'];
?>
<html><head><title> Check Order </title></head>

<body bgcolor="white">

<?php
	include("header.inc");
	extract($_REQUEST, EXTR_SKIP);
	$error_message=array();
	if(isset($_REQUEST['submit'])){
		//checks if all the fields are filled out. If not, saves the error messages for displayment.
		if($_FILES['picture_file']['name']==""){
			$error_message['picture']= "PLEASE UPLOAD A PHOTO!";
		}
		if(!isset($_POST['paper_size'])){
			$error_message['paper_size']= "PLEASE CHOOSE THE PAPER SIZE!";
		}
		if(!isset($_POST['person_amount'])){
			$error_message['person_amount']="PLEASE CHOOSE THE PERSON AMOUNT!";
		}
	}
    
	//uploads the order image into project file and prints the image
	if(!array_key_exists("picture",$error_message)){
		$file_name=$_FILES['picture_file']['name'];
		$directory='';
		$upload_file = $directory . $file_name;

		if (move_uploaded_file($_FILES['picture_file']['tmp_name'],$upload_file)){

?>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<font size="+3">UPLOADED PHOTO:</font></br></br></div>
</br>
<img src=<?php echo "'".$file_name."'";?> height="250px" ></img>
</br>
<?php
    }
	else{
		echo "Couldn't upload the photo. The error might be caused by the blank spaces in the name of the photo. Please rename the photo and try again. ";
	}
}?>
</br>
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<font size="+3"> MEDIUM: Watercolor </font></br></br>
</div>
</br>
<?php

	if(!array_key_exists("person_amount", $error_message)){
?> 

<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<font size="+3"> NUMBER OF PEOPLE: <?php echo $person_amount ;?></font></br></br>
</div>
</br>
<?php
}
	if(!array_key_exists("paper_size", $error_message)){
?> 
<div style="background-color:#ebfbff; width:50%; height:7%;" > 
<font size="+3">  SIZE OF THE PAPER: <?php echo $paper_size ;?></font></br></br>
</div>
</br>
<?php
} 
	if(isset($_POST['comment'])){
?>
<div style="background-color:#ebfbff; width:50%; height:35%;" > 
<font size="+3">  YOUR COMMENT: <?php echo $comment ;?> </font></br></br>
</div>
</br>
<?php	}
	else{
		$comment="";
	}

foreach( $error_message as $error){?>

<div style="background-color:red; width:50%; height:7%;" > 
<font size="+3" color="white"><?php echo "$error ";?></font></br></br>
</div>
</br>

<?php	}
	$array_len=count($error_message);
	if ($array_len ==0){ 
	//calculate_price function is taken from library.php 
	 $price=calculate_price($person_amount, $paper_size, "watercolor");
	 $customer_id=$user['id'];
	 $customer_name=$user['name'];
	 $customer_surname=$user['surname'];
	 $customer_address=$user['address'];
	 $customer_email=$user['email'];
	 $comment=trim(addslashes($_POST['comment']));
	 //if there are no errors, put the order informations in an array and assign the array to session[Order]
	 $order=array("customer_id"=>$customer_id, "art_medium"=>'watercolor', "photo"=>$file_name, "paper_size"=>$paper_size, "person_amount"=>$person_amount, "comment"=>$comment, "price"=>$price, "customer_name"=>$customer_name, "customer_surname"=>$customer_surname, "customer_address"=>$customer_address,"customer_email"=>$customer_email);
	 $_SESSION['Order']=$order;

	 ?>
	 <div style="background-color:#d6ccc2; width:50%; height:7%;" > 
	 <font size="+3"> TOTAL COST: <?php echo $price; ?>$</font>
	 </div>
	 </br></br>
	 <form action="take_order.php" method="POST">
	<input type="submit" name="submit" value="Confirm My Order" style="height:10%; width:20%; background-color:black; color:white;">
	</form>
<?php }	
	else{ ?>
	<div style="background-color:black; width:10%; height:7%;">
	<a  href=watercolor_form.php> <font color="white" size="+2"> GO BACK </font></a>
	</div>

<?php	
	}
	include("footer.inc");
?> 


</body>
</html>