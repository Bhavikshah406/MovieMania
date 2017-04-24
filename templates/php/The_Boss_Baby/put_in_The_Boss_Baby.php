<?php
	//have to put user name
	extract($_GET);
	$f=fopen("../../info/The_Boss_Baby_reviews.txt","a");
	
	fwrite($f,"//\n".$name.":".$data);
	fclose($f);
?>