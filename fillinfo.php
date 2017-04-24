<?php
	
	extract($_GET);
	/*$file=fopen("rssinfo", "w");
	fwrite($file,"");
	fclose($file);
	$text="\n"."hi"."\n";*/
	//echo "<script>alert('$text');</script>";	
	$file=fopen("rssinfo", "w");
	fwrite($file,$text);
	fclose($file);

?>