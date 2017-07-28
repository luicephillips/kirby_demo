<?php

if(isset($_POST['emailf']))
{
	$emailf = $_POST['emailf'];
	$namef = $_POST['namef'];
	$messagef = $_POST['messagef'];
	
	

	$email = email(array(
	  'to'      => 'luice.phillips@gmail.com',
	  'from'    => $emailf,
	  'subject' => 'Contact Kirby',
	  'body'    => $messagef
	));
	
	if($email->send()) {
	  echo 'The email has been sent';
	} else {
	  echo $email->error()->message();
	}

}

?>