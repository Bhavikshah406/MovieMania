<?php
	extract($_GET);
	$file=fopen("credentials.txt","r");
	$present=false;
	while($line=fgets($file))
	{
		$line=trim($line);
		$username=explode(":",$line);
		if($username[0]==$val)
		{
			$present=true;
			break;
		}
	}
	
	if($present==true)
	{
		$data="1";
	}
	else
	{
		$data="2";
	}
	echo $data;
?>
