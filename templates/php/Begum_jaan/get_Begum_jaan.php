<?php
	header("content-type:text/json");
	$f=fopen("../../info/Begum_reviews.txt","r");
	$file=fread($f,filesize("../../info/Begum_reviews.txt"));
	//echo $file;
	
	fclose($f);
	$val=explode("//\n",$file);

    $a=array();
    $tab = ":";

    foreach ($val as $string)
    {
        $row = explode($tab, $string);
        $a[$row[0]]=$row[1];
    }
    echo json_encode($a);
?>