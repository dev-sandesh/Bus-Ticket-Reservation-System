<?php
session_start();
require 'connect.php';
$source=$_SESSION['source'];
$destination=$_SESSION['destination'];
$date=$_SESSION['date'];
$k=0;
$list=array('source'=>array(),'destination'=>array(),'time'=>array(),'fair'=>array(),'bus_type'=>array(),'bus_code'=>array());
$query = "SELECT * FROM `bus_info` WHERE `source` = '".mysql_real_escape_string($source)."' AND `destination` = '".mysql_real_escape_string($destination)."'";
if(isset($_POST['bus_select']))
{
	$radio_val=$_POST['bus_select'];
	if(!empty($radio_val))
	{
		$_SESSION['bus_code']=$radio_val;
		$querry="SELECT * from `bus_info` WHERE `bus_code` = '".$radio_val."'";
		if($q_run=mysql_query($querry))
		{
		$ro=mysql_fetch_assoc($q_run);
		$_SESSION['source']=$ro['source'];
		$_SESSION['destination']=$ro['destination'];
		$_SESSION['time']=$ro['time'];
		$_SESSION['fair']=$ro['fair'];
		$_SESSION['bus_type']=$ro['bus_type'];
		$_SESSION['route']=$ro['route_no'];
		header('Location:booking.php');
		}
		else echo 'error';
	}
}
$f=1;
if($query_run=mysql_query($query))
{
	$num_rows=mysql_num_rows($query_run);
	if($num_rows==0)
	{
			$_SESSION['not_found']=1;
			header("location:testfile1.php");
	}
	else{
		$i=0;
		while($row2=mysql_fetch_assoc($query_run))
		{
			$list['source'][$i]=$source;
			$list['destination'][$i]=$destination;
			$list['time'][$i]=$row2['time'];
			$list['fair'][$i]=$row2['fair'];
			$list['bus_type'][$i]=$row2['bus_type'];
			$list['bus_code'][$i++]=$row2['bus_code'];
		}
	}
	if($f==1)
	{
		?>
<!doctype HTML>
<html>
<head>
		<style type="text/css">

		html, body {
		margin:0;

		padding:0;
		}
		body a{
		  transition: 0.1s all;
			-webkit-transition: 0.1s all;
		  font-family: 'Open Sans', sans-serif;
		}

		ul {
		    list-style-type: none;
		    margin-top: 10px;
		    padding: 0;
		    overflow: auto;
		    background: transparent;
		    color: #D3D3D3;
		}


		li {
		    float: left;

		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 10px 15px;
		    text-decoration: none;
		    font-size: 15px;
		    font: verdana;
		    max-width: auto;
		color: #D3D3D3;
		}

		li a:hover {
		    background-color: #fff;

		}

		.container
		{   display: block;
		    padding: 1px 40px 1px 0px ;
		    height: auto;
		    max-width: auto;
		    background: transparent;
		}

		.innernav
		{
		  display: block;
		  margin-left: 0px;
		  padding: 15px 30px 0 10px;
		  background-color: #000;
		  height: 70px;
		}

		li.dropdown {
		    display: inline-block;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    width: 120px;
		    box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		}

		.dropdown-content a:hover
		{background-color: #f1f1f1}

		.dropdown:hover .dropdown-content
		{
		    display: block;
		}

body{
    background-image: url("image2.jpg");
    }


			.unibody
			 {
				 float: left;
				 margin-top: 5%;
				 background: #FFFFFF;
				 margin-left: 10%;
				 height: 650px;
				 padding: 50px;
				 width: 1000dpi;
				 max-height: 550px;
				 text-align: center;
				 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
				 border-radius: 0.5em;
				 opacity: 0.8;
			 }

			 table {
					overflow: auto;

			   width: 120%;
			  	font-size: 130%;
			   max-width: 1000px;
			   height: 200px;
			   border-collapse: collapse;
			   border: 1px solid #38678f;
			   margin: 50px auto;
			   background: white;
			 }

			 th {
			   background-color: #000000;
			   height: 54px;
			   width: 10%;
			   font-weight: lighter;
			   text-shadow: 0 1px 0 #38678f;
			   color: white;
			   border: 1px solid #38678f;
			   box-shadow: inset 0px 1px 2px #568ebd;
			   transition: all 0.2s;

			 }
			 tr {
			 	border-bottom: 1px solid #cccccc;

			 }
			 .unibody input
			{
				 font-family: "Roboto", sans-serif;
				 text-transform: uppercase;
				 outline: 0;
				  background-color: #000000;
				 width: 10%;
				 padding: 15px;
				 color: #FFFFFF;
				 font-size: 14px;

			 }
			 #sel2, #sel1 {
			     display: flex;
			 }
</style>
</head>


<body>

	<div class="outernav">
	<div class="innernav">
	<div class="container">

	  <ul>
	    <li><a href="testfile1.php">Home</a></li>
	    <li style="float:right"><a href="contact.php">Contact</a></li>
<li><a href="about.php">About Us</a></li>
	    <li class="dropdown" style="float:right"><a href"#">User</a>
	      <div class="dropdown-content">
	        <?php if(isset($_SESSION['username1']))
	        {
	        ?>
	        <a href="cancel.php">Login</a>
	        <a href="Transaction.php">My Transactions</a>
	        <a href="user_bookings.php">My Bookings</a>
	        <a href="logout.php">Log out</a>
	      <?php
	        }
	        else {
	        ?>
	        <a href="login.php">Login</a>
	        <a href="register.php">register</a>
	      <?php
	        }
	        ?>
	      <div>
	    </li>
	  </ul>

	</div>
	</div>
	</div>

<div class="unibody" style="width: 70%; overflow:auto; height: 450px;">
		<form action="test_search.php" method ="post">
		<table>
		<tr>
			<th>Select</th><th>Source</th><th>destination</th>
			<th>Time</th>
			<th>Fair</th><th>BusType</th>
			<th>BusCode</th>
		</tr>

		<?php
		while ($i>0)
		{
			$i--;
			?>
			<tr>
			<td><input type='radio' name ='bus_select' value=<?php echo $list['bus_code'][$i];?>
		required="required"></td><td><?php echo $list['source'][$i];?></td>

			<td><?php echo $list['destination'][$i];?></td><td><?php echo $list['time'][$i];?></td>
			<td><?php echo $list['fair'][$i];?><td><?php echo $list['bus_type'][$i];?></td>
			<td><?php echo $list['bus_code'][$i];?></td>
			</tr>

			<?php

		}

			?>
			</table>

			<div class="sel2" display: inline-block;>
			<input type="submit" value="proceed" name="proceed">
			</div>
			</form>


	        <?php
	}
}
else
	echo 'ERROR';

?>

<form action="testfile1.php " Method="POST">
<div class="sel1" display: inline-block; >
<input type="submit" value="Back" name="back">
</div>
</div>

</form>
