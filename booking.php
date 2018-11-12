<?php
	session_start();

	$selectable="true";
	$bus_code= $_SESSION['bus_code'];
	require 'connect.php';
	$date=$_SESSION['date'];
	$seat=array();
	$seat_select=array();
	$t=0;
	if(!empty($_SESSION['username1']))
	{
	if(isset($_POST['seat'])&&!empty($_POST['seat']))
	{

			foreach($_POST['seat'] as $seatno)
				$seat_select[$t++]=$seatno;
			$_SESSION['seat_select']=$seat_select;
			header('Location:pas_details.php');

	}
	else{
	$query="SELECT `seat` FROM `bookings` WHERE `journey_date`='".$date."' AND `bus_code`='".$bus_code."' AND `status` = 1 ORDER BY `seat` ASC";

	$k=0;
	if($query_run=mysql_query($query))
	{
		while($row=mysql_fetch_assoc($query_run))
		{
			$seat[$k++]=$row['seat'];
		}

	}
	else
		echo 'error';

	$k=0;
	$num_rows=mysql_num_rows($query_run);
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title> 101 </title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<style type="text/css">

.navbar
{
width: auto;
overflow: hidden;
margin-top: 0px;

}
		body{
				background-image: url("image2.jpg");
				}

				html, body {
				margin:0;
				padding:0;
				}
				ul {
						list-style-type: none;
						padding: 0px 0px 0px 0px;
						margin-top: 0px;
						overflow: auto;
						background: black;
						color: #D3D3D3;
				}


				li {
						float: left;

				}

				li a {
						display: block;
						color: white;
						text-align: center;
						padding: 20px 15px;
						text-decoration: none;
						font-size: 15px;
						font: verdana;
						max-width: auto;
				color: #D3D3D3;
				}


					.unibody
					 {
						 float: left;
						 margin-top: 40px;
						 background: #FFFFFF;
						 margin-left: 37%;
						 height: 450px;
						 padding: 30px;
						 width: 35%;
						 max-height: 600px;
						 text-align: center;
						 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
						 border-radius: 0.5em;
						 background-color:rgba(207, 224, 232,0.9);

					 }

					 input.setup {
					 							 margin-top: 6%;
					 							 margin-left: 41%;
					 						  	width:100px;
					 						  	padding: 10px 10px;
					 						  	font-size: 130%;
					 					  		float: left;
									  			color: #ccc;
					 				  			border: 0;background: #5C6BC0;
					 			  			 border-radius: 3px 3px 3px 3px;
												 background-color:rgba(58, 96, 158,0.7);

											}

						input :focus
												{
													outline:1 ;background: #5C6BC0;
												}
						.container {

													  padding-left: 1px;
														margin: 1px;
													  cursor: pointer;
													  font-size: 8px;

												}

													/* Hide the browser's default checkbox */
								.container input.check
								{
			  								position: relative;
												display: inline-block;
					  						opacity: 0;
								}
							/* Create a custom checkbox */
								.checkmark
									{
										position: static;
								    display: inline-block;
										margin: 2px;
										margin-top: 3px;
									  height: 25px;
									  width: 25px;
									  background-color:  #77a8a8;
										border-radius: 4px;

									}
	/* On mouse-over, add a grey background color */
							.container:hover input ~ .checkmark
													{
													  background-color: #ccc;
													}

													/* When the checkbox is checked, add a blue background */
													.container input:checked ~ .checkmark {
													  background-color: #2196F3;
													}

													/* Create the checkmark/indicator (hidden when not checked) */
													.checkmark:after {
													  content: "";
													  position: flex;
													  display: none;
													}

													/* Show the checkmark when checked */
													.container input:checked ~ .checkmark:after {
													  display: block;
													}

													/* Style the checkmark/indicator */
													.container .checkmark:after {
														margin-left: 7px;
														margin-top: 3px;
													  left: 20px;
													  top: 5px;
													  width: 5px;
													  height: 14px;
													  border: solid white;
													  border-width: 0 3px 3px 0;
													  -webkit-transform: rotate(45deg);
													  -ms-transform: rotate(45deg);
													  transform: rotate(45deg);
													}
</style>
</head>
<body>

<div class="navbar">
<ul class="a">
				<li><a href="testfile1.php">HOME</a></li>
				<li style="float:right"><a href="mlogout.php">LOGOUT</a><li>
				<li style="float:right"><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
		 </ul>

<div class="unibody">

<?php
print(" &nbsp&nbspA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp B &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp C &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp D &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp F");
echo '</br>';
for($i='1';$i<'10';$i++)
	{
?>

<?php
		if($i<10)
			$i='0'.$i;

		for($j='A';$j<='F';$j++)
		{
			if ($j=='D')
				echo '&nbsp&nbsp&nbsp&nbsp';
?>

<?php
/*$selectable="true";

			if($i.$j==$seat[0])
			{
				$selectable="false";
				if($k!=$num_rows-1)
					$k++;
			}
			*/

			?>
<form action = "booking.php" method="post">
<label class="container">
<?php if($j=='A') echo $i; ?><input class="check" type="checkbox" name ="seat[]" value="<?php echo $i.$j;?>" id="<?php echo $i.$j;?>" />
<span class="checkmark">
</span>
</label>
			<?php
		}
echo '</br>';
	}
	}

?>
<div class="Proceed">
<input class="setup" type="submit" value="proceed" name="proceed" onClick="click1();">
</div>

</div>


</form>
<script = "text/JavaScript">
	var seat = <?php echo json_encode($seat)?>;
	var num=<?php echo $num_rows?>;
	var f1=0;
	var i='1';
	var j=1;
	var q='A';

	var k=0;
	while(i<='12')
	{
		j=1;
		while(j<=6)
		{
				switch(j)
				{
					case 1:q='A';
							break;
					case 2:q='B';
							break;
					case 3:q='C';
							break;
					case 4:q='D';
							break;
					case 5:q='E';
							break;
					case 6:q='F';
							break;
				}

				if(i<'10')
				{
					if(('0'+i+q)==seat[k])
					{
						if(k!=num-1)
							k++;
						document.getElementById('0'+i+q).disabled = true;
						document.getElementById('0'+i+q).checked = true;
					}
				}
				else
				{
					if((i+q)==seat[k])
					{
						if(k!=num-1)
							k++;
						document.getElementById(i+q).disabled = true;
						document.getElementById(i+q).checked = true;
					}
				}
				j++;
		}
		i++;
	}

</script>
<script = "text/JavaScript">
function click1()
{

	var f1=0;
	var i='1';
	var j=1;
	var q='A';

	while(i<='20')
	{
		j=1;
		while(j<=6)
		{
				switch(j)
				{
					case 1:q='A';
							break;
					case 2:q='B';
							break;
					case 3:q='C';
							break;
					case 4:q='D';
							break;
					case 5:q='E';
							break;
					case 6:q='F';
							break;
				}

				if(i<'10')
				{

						if( !(document.getElementById('0'+i+q).disabled))
							if((document.getElementById('0'+i+q).checked))
							{
								f1=1;
							}

				}
				else
				{
					try
					{


					if( !(document.getElementById(i+q).disabled))
						if((document.getElementById(i+q).checked))
							f1=1;
					}
					catch(Exception)
					{}


				}
				j++;
		}
		i++;
	}
	if (f1==0)
		alert('Please select any seat');


}


</script>



<?php
}
else
{
	$_SESSION['redirect']=1;
	$_SESSION['set']=1;
header("location:login.php");
}
?>
