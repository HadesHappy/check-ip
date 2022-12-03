<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	//$uri .= $_SERVER['HTTP_HOST'];
        $uri .='localhost';
	header('Location: '.$uri.'/gmail/gm/gmailuser.html');
	exit;
?>
Something is wrong with the XAMPP installation :-(
