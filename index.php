<?php
	
	require_once "Mails/Mail.php";
	$subject = "Hello world";
	$to      = "karenkostanyan89@gmailc.om"
	$from    = "somemail@mail.com"; // send e-mail address
	$body    = $message; // your message. it can be html 

	$host    = "vm10461.vps.agava.net"; // your host example: vagrant.vps.net
	$port    =  "25"; // your port: 25
	$user    = "no-reply@domain_name.com"; // username for e-mail account example: no-reply@gmail.com
	$pass    = "password"; // password for e-mail account example: xxxxxxx
	$headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject,"Content-Type"=>"text/html; charset=UTF-8");
	$smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
	$mail    = @$smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)){
		echo "error: {$mail->getMessage()}";
	} 
	
?>
