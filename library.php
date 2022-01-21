<?php 

//a function to return the price according to the person amount paper size and art medium
function calculate_price($person_amount, $paper_size, $art_medium){
	$price= 0;
	//pencil prices
	if ($art_medium=="pencil"){
		if($paper_size=="A4"){
			if ($person_amount==1){
				$price= 40;
			}
			else if ($person_amount==2){
				$price= 60;
			}
		}
		
		else if($paper_size=="A3"){
			if ($person_amount==1){
				$price= 50;
			}
			else if ($person_amount==2){
				$price= 70;
			}
			else if ($person_amount==3){
				$price= 100;
			}	
		}
		
		else if($paper_size=="A2"){
			if ($person_amount==1){
				$price= 70;
			}
			else if ($person_amount==2){
				$price= 100;
			}
			else if ($person_amount==3){
				$price= 150;
			}	
			else if ($person_amount==4){
				$price= 200;
			}	
		}
	}
	//watercolor prices
	else if ($art_medium=="watercolor"){
		if($paper_size=="A4"){
			if ($person_amount==1){
				$price= 50;
			}
			else if ($person_amount==2){
				$price= 70;
			}
		}
		
		else if($paper_size=="A3"){
			if ($person_amount==1){
				$price= 60;
			}
			else if ($person_amount==2){
				$price= 90;
			}
			else if ($person_amount==3){
				$price= 120;
			}	
		}
		
		else if($paper_size=="A2"){
			if ($person_amount==1){
				$price= 80;
			}
			else if ($person_amount==2){
				$price= 120;
			}
			else if ($person_amount==3){
				$price= 170;
			}	
			else if ($person_amount==4){
				$price= 250;
			}	
		}
	}
			
	return $price;
}
?>