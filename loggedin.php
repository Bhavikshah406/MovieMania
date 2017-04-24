
<!Doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- sweet alert-->
<script src="./sweetalert2/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="./sweetalert2/sweetalert2.min.css">

<html>
<head>
<style>
* {
	width:100%;
	padding:0px;
	margin:0px;
}
.header {
    
    top: 0;
    left: 0;
    width: 100%;
    background: #cc5350;
    color:#fff;
    z-index: 1000;
    height: 100px;
    overflow: hidden;
    line-height:40px;
    

}
.header.shrink {
    height: 100px;
    line-height:80px;
}
.header h1
{
    font-size:40px;
    padding-left:5%;
    font-weight:normal;
     padding-top:10px;
    display:inline;
}


.header.shrink h1
{
    font-size:24px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
.content
{
height:700px;
width:33.3%;
 /*just to get the page to scroll*/
}
.textstyle
{
	margin-left: 10px;
	color: black;
	font-size:20px;

}
#movies
{
	position:relative;
	left:10px;
}

.s {		color: white;
				font-family:"Comic Sans MS", cursive, sans-serif;
				font-size: 1000px;
			 }

a:link {
    color: green;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: red;
}

/* selected link */
a:active {
    color: yellow;
} 

</style>
	<script>

		$(document).on('click', function (e) {
    if (e.originalEvent.defaultPrevented) return;
    // continue
		});

	function loadcontents()
	{
		loadmoviecontents();
		loadtvcontents();
		loadgamecontents();
	}


	function loadmoviecontents(){

			xhr=new XMLHttpRequest();
			xhr.onreadystatechange=updatemoviecontents;
			xhr.open("GET","getcont.php?id="+"1",true);
			xhr.send();
	}
	
	function updatemoviecontents(){
		//div=document.getElementById("cont");
		if(xhr.readyState==4 && xhr.status==200)
		{
			doc=xhr.responseXML;
			//alert(doc);
			root=doc.documentElement;
			titles = root.getElementsByTagName("title");
			enclosure = root.getElementsByTagName("enclosure");
			links = root.getElementsByTagName("link");
			for(i in titles){
				if(Number.isInteger(parseInt(i)))
				{
						//alert(i);
						if(i>=2)
						{
							
							var ul=document.getElementById("movies");
							var a = document.createElement('a');
							var linkText = document.createTextNode(titles[i-1].firstChild.nodeValue);
							a.appendChild(linkText);
							a.href = links[i].firstChild.nodeValue;
							var l=document.createElement('li');
							l.className="textstyle";
							l.appendChild(a);
							ul.appendChild(l);
						}
				
				}
				
			}
		
		}
		
	}

	function loadgamecontents(){

			//alert('fvd');
			xhr2=new XMLHttpRequest();
			xhr2.onreadystatechange=updategamecontents;
			xhr2.open("GET","getcont.php?id="+"3",true);
			xhr2.send();
	}
	
	function updategamecontents(){
		//div=document.getElementById("cont");
		if(xhr2.readyState==4 && xhr2.status==200)
		{
			doc=xhr2.responseXML;
			//alert(doc);
			root=doc.documentElement;
			titles = root.getElementsByTagName("title");
			enclosure = root.getElementsByTagName("enclosure");
			links = root.getElementsByTagName("link");
			for(i in titles){
				if(Number.isInteger(parseInt(i)))
				{
						if(i>2 && i<15)
						{
							var ul=document.getElementById("games");
							var a = document.createElement('a');
							var linkText = document.createTextNode(titles[i-1].firstChild.nodeValue);
							a.appendChild(linkText);
							a.href = links[i].firstChild.nodeValue;
							var l=document.createElement('li');
							l.className="textstyle";
							l.appendChild(a);
							ul.appendChild(l);
						}
				
				}
				
			}
		
		}
		
	}

function loadtvcontents(){

			xhr1=new XMLHttpRequest();
			xhr1.onreadystatechange=updatetvcontents;
			xhr1.open("GET","getcont.php?id="+"2",true);
			xhr1.send();
	}
	
	function updatetvcontents(){
		//div=document.getElementById("cont");
		if(xhr1.readyState==4 && xhr1.status==200)
		{
			/*doc=xhr1.responseXML;
			//alert(doc);
			root=doc.documentElement;
			titles = root.getElementsByTagName("title");
			enclosure = root.getElementsByTagName("enclosure");
			links = root.getElementsByTagName("link");
			for(i in titles){
				if(Number.isInteger(parseInt(i)))
				{
						if(i>=2)
						{
							var ul=document.getElementById("tv");
							var a = document.createElement('a');
							var l=titles[i].firstChild.nodeValue;
							var z=l.indexOf("WEB");
							var f=l.indexOf("HDTV");
							var t=0;
							if(z==-1 && f==-1)
							{
								t=l.lenght;
							}
							else if(z==-1)
							{
								t=f;
							}
							else if(f==-1)
							{
								t=z;
							}
							else
							{
								if(f<z)
								{
									t=f;
								}
								else
									t=z;
							}
							t=t-1;
							l=l.substring(0, t);
							var linkText = document.createTextNode(l);
							a.appendChild(linkText);
							a.href = links[i].firstChild.nodeValue;
							var l=document.createElement('li');
							l.className="textstyle";
							l.appendChild(a);
							ul.appendChild(l);
						}
				
				}
				
			}
		}*/
		
			doc=xhr.responseXML;
			//alert(doc);
			root=doc.documentElement;
			titles = root.getElementsByTagName("title");
			enclosure = root.getElementsByTagName("enclosure");
			links = root.getElementsByTagName("link");
			for(i in titles){
				if(Number.isInteger(parseInt(i)))
				{
						//alert(i);
						if(i>=2)
						{
							
							var ul=document.getElementById("tv");
							var a = document.createElement('a');
							var linkText = document.createTextNode(titles[i-1].firstChild.nodeValue);
							a.appendChild(linkText);
							a.href = links[i].firstChild.nodeValue;
							var l=document.createElement('li');
							l.className="textstyle";
							l.appendChild(a);
							ul.appendChild(l);
						}
				
				}
				
			}
		
		
		}
	}

	function nextpage()
	{
		
		window.location.href="templates/moviereview.php?uname="+user;
	}
	

	</script>
</head>
<body onload="loadcontents()">
<?php
	extract($_GET);
	
	echo "<script>";
	echo " user = '".$uname."' \n" ;
	//echo " email = '".$passwd ."'";
	
	echo "</script>";
?>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>


<div class="header">
  <center><h1 class="s">Movie Mania</h1></center>
  <h2 style="float:right;color:white;width:220px;height:20px;font-size: 20px" id="user" ></h2>
  <a  href="javascript:nextpage()" style="float:left;margin-left:10px;color:white;width:400px;font-size: 15px"><u>Click For Movie Ratings and Reviews</u></a>
  

</div>
<div class="content" id="cont" style="background-color: #FFA500;float:left">
<br>
<ul id="movies">
<l1><h2>New Movie Trailers<h2></li>
</ul>
</div>

<div class="content" id="tvcont" style="background-color: #FFA500;float:left;">
<br>
<ul id="tv">
<l1><h2>TV shows downloads<h2></li>
</ul>
</div>

<div class="content" id="gamecont" style="background-color: #FFA500;float:left;">
<br>
<ul id="games">
<l1><h2>Latest Video games<h2></li>
</ul>
</div>

<script>
	x=document.getElementById('user');
	x.innerHTML="Welcome "+ user.toUpperCase();	
</script>




</body>

</html>
