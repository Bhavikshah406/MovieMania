<?php
	//have to put user name
	extract($_GET);
	$f=fopen("Begum_reviews.txt","a");
	$name="bhavik";
	//$data="gf";
	echo "<script>";
	echo "alert('hello')";
	echo "</script>";
	fwrite($f,"//\n".$name.":".$data);
	fclose($f);
?>