<?php
if(isset($_POST['check']))
{
	$mobile='91' .$POST['mobile'];
	$message=$_POST['message'];
	$apiKey = urlencode('Inter your code');
	$numbers = array(mobile number);
	$sender = urlencode('This is your Message');
	$numbers = impode(',',$numbers);
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
?>
