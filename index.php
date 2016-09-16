<?php	

	$name = $_POST['name'];
	$age = $_POST['age'];
	$country = $_POST['country'];
	$website = $_POST['website'];
	$header = 'From: Chris'; 
    $to = 'someemail@somedomain'; 
    $subject = 'PHP HoneyPot Test';

    $body = "From: $name\n Age: $age\n Country: $country";


	if(!empty($_POST)) {
		if($website != ""){
			echo "You are a bot!";
			return false;
		}else {
			mail($to, $subject, $body, $header);
			echo '<p>Your message has been sent!</p>';
		}
	}else {
		echo "Error";
	}
			

?>