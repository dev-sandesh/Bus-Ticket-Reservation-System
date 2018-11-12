<html>
<head>
<style>
select {
    min-width:150px;
    min-height: 25px;
}
	*{
	margin:0;
	padding:0;
	list-style:none;
	text-decoration:none;
}
body{
	background-color:black;
}
button{font:16px "trebuchet MS",sans-serif;

}
.button{
padding:8px 16px;
display:inline-block;
text-decoration:none;
border-radius:3px;
background-color:#ccc;
}
.button-primary{
	background:slategrey;
	color:#fff;
}
.button-medium{
	font-size:22px;
	padding:16px 26px;
}
.button1-medium{
	font-size:12px;
	padding:14px 20px;
	background:slategray;
	color:white;
}

.button-primary:hover{
	background:lightslategrey;
}
.button2-medium{
	font-size:7px;
	padding:10px 20px;
	background:slategray;
	color:white;
}
.main{
	width:1000px;
	height:-300px;
	margin:10px auto;
	border-radius:5px;
	background-color:#666;

}
form input{
	margin:10px;
	border:0;
	background:#fff;
	height:25px;
	width:200px;
	padding:10px;
	-webkit-transition:all.3s ease-in;
	-moz-transition:all.3s ease-in;
	-o-transition:all.3s ease-in;
	-ms-transition:all.3s ease-in;
	transition:all.3s ease-in;
}
form input:focus{
	width:300px;
}

.slider{
	overflow:hidden;
	height:800px;
}
.slider figure div{
	width:20%;
	float:left;
}
.slider figure img{
	width:100%;
	float:left;
}
.slider figure{
	position:relative;
	width:500%;
	margin:0;
	left:0;
	animation:20s slidy infinite;
}
@keyframes slidy{
	0%{
		left:0%;
	}
	10%{
		left:0%
	}
	12%{
		left:-100%;
	}
	22%{
		left:-100%;
	}
	24%{
		left:-200%;
	}
	34%{
		left:-200%;
	}
	36%{
		left:-300%;
	}
	46%{
		left:-300%;
	}
	48%{
		left:-400%;
	}
	58%{
		left:-400%;
	}
	60%{
		left:-300%;
	}
	70%{
		left:-300%;
	}
	72%{
		left:-200%;
	}
	82%{
		left:-200%;
	}
	84%{
		left:-100%;
	}
	94%{
		left:-100%;
	}
	96%{
		left:0%;
	}
	100%{
		left:0%
	}

}

</style>
<title>Bus Reservation</title>
</head>
</html>

<?php
session_start();
$_session['set']=0;

include 'req_login.php';
if (isset($_SESSION['username1'])&&!empty($_SESSION['username1']))
{
}
else
{
?>
<a href=login.php  class="button button-primary button-medium">Sign in/Sign up </a>
<?php
}
?>

<?php

if((isset($_SESSION['username1'])&&!empty($_SESSION['username1'])))
{
	?>
<a href=logout.php class="button button-primary button-medium"> Log out</a>
	<a href=cancel.php class="button button-primary button-medium">cancel Ticket</a>

<?php
}

else
{
	echo 'please login to access';
	?>
	<a href="" onClick = "alert('Please Login to Access')">cancel Ticket</a>
<?php
}
if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['time']))
{
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$time=$_POST['time'];
	if(!empty($source)&&!empty($destination)&&!empty($time))
	{
		 $_SESSION['source']=$source;
		 $_SESSION['destination']=$destination;
		$_SESSION['date']=$time;
		header('Location:test_search.php');
	}
	else
		echo 'Please fill in all the fields';
}

?>
<form action="testfile1.php" Method="POST" onSubmit="return submit1();">
<select name="source" id="source" >
	<option value=""> choose source</option>
<?php
	foreach($city as $r=>$city1)
	{
?>
	<option value="<?php echo $city1;?>"><?php echo $city1?></option>
	<?php
	}
	?>
</select>


<select name="destination" id="destination">
	<option value="" > choose destination</option>
<?php
	foreach($city as $r=>$city1)
	{
?>
	<option value="<?php echo $city1;?>"><?php echo $city1?></option>
	<?php
	}
	?>
</select>

	<input type="date" name="time" required="required" id="date_of_journey" >
	<input type="submit" value="Search" name="search">

</form>
<div class="slider">
	<figure>
	<div class="slide">
		<img src="images/sample.jpeg">
	</div>
	<div class="slide">
		<img src="images/bus2.jpg">
	</div>
	<div class="slide">
		<img src="images/sample1.jpg">
	</div>
	<div class="slide">
		<img src="images/bus1.jpg">
	</div>
	<div class="slide">
		<img src="images/images2.jpeg">
	</div>
	</figure>
</div>


<script = "text/JavaScript">
      var input = document.getElementById("date_of_journey");
      var today = new Date();
      var day = today.getDate();

      // Set month to string to add leading 0
      var mon = new String(today.getMonth()+1); //January is 0!
      var yr = today.getFullYear();
	  day++;

        if(mon.length < 2) { mon = "0" + mon; }
        if(day < 10) { day = "0" + day; }
        var date = new String( yr + '-' + mon + '-' + day );
      input.disabled = false;

      input.setAttribute("min", date);
	  function submit1()
	  {
		  var source=document.getElementById("source").value;
		  var destination=document.getElementById("destination").value;

		  if(source==""||destination=="")
		  {
			  alert('choose source and destination');
			  return false;
		  }
		  else if(source == destination)
		  {
			  alert('source  and destination must be different');
			  return false;
		  }
			  return true;
	  }
</script>
