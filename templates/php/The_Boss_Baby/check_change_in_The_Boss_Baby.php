<?php
	
	//$f=fopen("The_Boss_Baby_reviews.txt","r");
	//$file=fread($f,filesize("The_Boss_Baby_reviews.txt"));

	session_start();
	ob_start();
	
	header("Content-type: text/event-stream");
	
	//Monitor the file updated by 'B' perpetually
	//Read from the session.
	if($_SESSION["modtime"])
	{
		$oldtime = $_SESSION["modtime"];
	}
	else
	{
		$oldtime = filemtime("../../info/The_Boss_Baby_reviews.txt");
	}
	
	while(true)
	{
		clearstatcache();
		$newtime = filemtime("../../info/The_Boss_Baby_reviews.txt");
		
		if($newtime != $oldtime)
		{
			//The file is modified. That means 'B' typed something.
			//Open and read the last line from the file.
			//Read the file into an array and return the last one
			$msgarr = file("../../info/The_Boss_Baby_reviews.txt");
			$latestmsg = array_pop($msgarr);
			
			//Send the event
			echo "event:filechange\n";
			echo "data: $latestmsg\n\n";
			ob_flush();
			flush();
			
			$oldtime = $newtime;
			$_SESSION["modtime"] = $newtime;
		}
		
		//We will check every 1 seconds
		sleep(1);
	}


?>
