<?php
	//have to put user name
	extract($_GET);
	$f=fopen("../../info/Fast_&_Furious_8_reviews.txt","a");
	
	fwrite($f,"//\n".$name.":".$data);
	fclose($f);
?>