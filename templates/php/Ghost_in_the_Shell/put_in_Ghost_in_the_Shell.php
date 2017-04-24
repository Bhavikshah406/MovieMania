<?php
	//have to put user name
	extract($_GET);
	$f=fopen("../../info/Ghost_in_the_Shell_reviews.txt","a");
	
	fwrite($f,"//\n".$name.":".$data);
	fclose($f);
?>