<?php
	//have to put user name
	extract($_GET);
	$f=fopen("../../info/Begum_reviews.txt","a");
	
	fwrite($f,"//\n".$name.":".$data);
	fclose($f);
?>