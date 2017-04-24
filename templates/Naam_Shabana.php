<!doctype html>
<head>
	<title>	MovieReviews</title>
	<link rel="stylesheet" href="css/Naam_Shabana.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="jquery.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./sweetalert2/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./sweetalert2/sweetalert2.min.css">
</head>

<script type="text/javascript">
	initialrating=8;
	function changerating(x)
	{
		//alert(x.value);
		t=parseInt(x.value)/10.0;
		t+=initialrating;
		t=t+"/10";
		$("#rating").text(t);

	}

	function getinfo()
	{
		xhr=new XMLHttpRequest();
		xhr.onreadystatechange=update;
		xhr.open("get","php/Naam_Shabana/get_Naam_Shabana.php",true);
		xhr.send(null);
	}

	function update()
	{
		if(xhr.readyState==4 && xhr.status==200)
		{
			f=JSON.parse(xhr.responseText);
			//alert(f);
			count=1;
			for(x in f)
			{
				if(count==1)
				{
					$("#k").append("<center><p><h4>"+x+"</h4>\n"+f[x]+"</p></center>");
					count++;
				}
				else
					$("#k").append("<hr><center><p><h4>"+x+"</h4>\n"+f[x]+"</p></center>");
			}
			check();
		}
	}

	function putreview()
	{
		f=prompt("Enter your review");
		if(f!="")
		{
			xhr1=new XMLHttpRequest();
			xhr1.onreadystatechange=success;
			xhr1.open("get","php/Naam_Shabana/put_in_Naam_Shabana.php?data="+f+"&name="+user,true);
			xhr1.send(null);
			//$("#k").append("<hr><center><p><h4>Bhavik</h4>"+f+"</p></center>")
		}
	}
	function success()
	{
		if(xhr1.readyState==4 && xhr1.status==200)
		{
			swal('Your review has been registered','','success');
		}
	}

	function check()
	{
		var ev = new EventSource("php/Naam_Shabana/check_change_in_Naam_Shabana.php");
		ev.addEventListener("filechange", updatereview);
	}

	function updatereview(event)
	{
		d=event.data.split(":");
		$("#k").append("<hr><center><p><h4>"+d[0]+"</h4>\n"+d[1]+"</p></center>");
		
	}
</script>


<body style="background-color:#FFA500;" onload="getinfo()">
	<?php
		extract($_GET);
		
		echo "<script>";
		echo " user = '".$uname."' \n" ;
		//echo " email = '".$passwd ."'";
		
		echo "</script>";
	?>
	<div><center><h1>Naam_Shabana</h1></center> 
			<a href="../frontpage.html" style="float:right;font-size:20px;margin-right: 10px">Logout</a>
	</div>
	<br><br>
	<div class="row">
	    <div class="col-sm-6" id="f" style="background-color: #FF6347">
	    	<center><h2>Rating</h2><h2 id="rating">8/10</h2>
	    <div class="star-rating">
	      <div class="star-rating__wrap">
	        <input class="star-rating__input" id="star-rating-5" onclick="changerating(this)" type="radio"  name="rating" value="5">
	        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
	        <input class="star-rating__input" id="star-rating-4" onclick="changerating(this)" type="radio" name="rating" value="4">
	        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
	        <input class="star-rating__input" id="star-rating-3" onclick="changerating(this)" type="radio" name="rating" value="3">
	        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
	        <input class="star-rating__input" id="star-rating-2" onclick="changerating(this)" type="radio" name="rating" value="2">
	        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
	        <input class="star-rating__input" id="star-rating-1"  onclick="changerating(this)"type="radio" name="rating" value="1">
	        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
	      </div>
	    </div><br>
	    <b>Description</b>: This Spin-off from Baby (2015) provides the back-story of intelligence agent Shabana, and chronicles how she becomes a spy<br>
	   	<b>Director</b>: Shivam Nair<br>
		<b>Stars</b>: Tapsee Pannu, Manoj Bajpayee, Prithviraj Sukumaran 
	    </center>
	    </div>

	    <div class="col-sm-6"  id="t" style="background-color: #FF6347;border-left: thick solid black;height:400;" >
	    	<br><br>
	    		<center><img height="250px" width="300px" src="images/Naam_Shabana.jpg" alt="Naam_Shabana jaan photo"></center>
	    </div>
    
    </div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12" id="k" width="100%" style="background-color: white">
	    	
	    </div>

	    <div>
	    	<center>
	    	<br>
	    	<input type="button" style="margin-top:10px" value="Write Review" onclick="putreview()"> </center>
	    </div>
    </div>



	
  

</body>
</html>