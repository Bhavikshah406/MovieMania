<!doctype html>
<script type="text/javascript">
	function call(x)
	{
		window.location.href=x+"?uname="+user;
	}
	/*
	{% for i in movies%}
	<li><a href="http://127.0.0.1:5000/{{i}}"><h1>{{i}}</h1></a></li>
	{% endfor %}
	<link rel="shortcut icon"
    href="{{ url_for('static', filename='images/favicon.ico') }}">
	*/
</script>
<style>
a {color:red;}
ul {
  list-style-type: none;
}

a:link {
	color:white;
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


<head>
	<title>	MovieReviews</title>
	
</head>
<body  background="images/all-movies-collage.jpg">
	<?php
	extract($_GET);
	
	echo "<script>";
	echo " user = '".$uname."' \n" ;
	//echo " email = '".$passwd ."'";
	
	echo "</script>";
?>
	<center><h1>Movies In Theatres</h1></center>
	<div id="background"></div>
	<center><ul>
	<li><a href="javascript:call('Begum_jaan.php')"><h2 >Begum jaan</h2></a></li>
	<li> <a href="javascript:call('Naam_Shabana.php')"><h2 >Naam Shabana</h2></a></li>
	<li><a href="javascript:call('Baahubali_2.php')"><h2 >Baahubali 2</h2></a></li>
	<li><a href="javascript:call('Fast_&_Furious_8.php')" ><h2>Fast & Furious 8</h2></a></li>
	<li> <a href="javascript:call('Ghost_in_the_Shell.php')" ><h2>Ghost in the Shell</h2></a></li>
	<li><a href="javascript:call('The_Boss_Baby.php')"><h2 >The Boss Baby</h2></a></li>
	</ul></center>
</body>
</html>