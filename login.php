<?php
	extract($_POST);
	$file=fopen("credentials.txt","r");
	$present=false;
	while($line=fgets($file))
	{
		$line=trim($line);
		$username=explode(":",$line);
		if($username[0]==$uname)
		{
			$present=true;
			break;
		}
	}
	
	if($present==true)
	{
		if($username[1]==$passwd)
		{
			echo "<script>","parent.changelocation();","</script>";
		}
		else
		{
			echo "<script>","parent.wrongsignin('password wrong');","</script>";
		}
	}
	else
	{
		echo "<script>","parent.wrongsignin('username does not exist');","</script>";
	}

?>
