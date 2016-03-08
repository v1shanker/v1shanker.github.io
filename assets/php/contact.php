<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = '[Email from Website]'
	$subject .= $_POST['subject']
	$message = $_POST['message'];
    
	
	$to  = 'vshanker@andrew.cmu.edu';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please email me directly at vshanker@cmu.edu';
	}
	
	
	echo json_encode($res);
}

?>