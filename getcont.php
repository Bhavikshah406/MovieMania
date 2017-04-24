<?php

header("content-type:text/XML");
extract($_GET);
if($id=='1')
{
	$feed=file_get_contents("http://movieweb.com/rss/new-movies/");
	//$feed=file_get_contents("mvs.xml");
	//$feed=file_get_contents("http://www.fandango.com/rss/newmovies.rss");
	
}
else if($id=='2')
{
	//$feed=file_get_contents("tv.rss");
	$feed=file_get_contents("http://extratorrent.cc/rss.xml?type=popular&cid=8");

}
else if($id=='3')
{
	$feed=file_get_contents("https://www.gamespot.com/feeds/reviews/");
	//$feed=file_get_contents("videogames.xml");
}

echo $feed;

?>
