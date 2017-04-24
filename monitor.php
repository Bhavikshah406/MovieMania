<?php
	
	// Set up for SSE
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
		$oldtime = filemtime("rssinfo");
	}
	
	while(true)
	{
		clearstatcache();
		$newtime = filemtime("rssinfo");
		
		if($newtime != $oldtime)
		{
			//The file is modified. That means 'B' typed something.
			//Open and read the last line from the file.
			//Read the file into an array and return the last one
			$msgarr = file("rssinfo");
			$latestmsg = array_pop($msgarr);
			
			//Send the event
			echo "event:chatmsg\n";
			echo "retry:100\n";
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