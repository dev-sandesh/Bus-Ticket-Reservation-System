<?php
ob_start();
require 'connect.php';
$f1=0;
	session_start();
	$count=0;
	$flag=0;
	foreach($_SESSION['seat_select'] as $key=>$value)
		$count++;
	$username=$_SESSION['username1'];
	$source=$_SESSION['source'];
	$destination=$_SESSION['destination'];
	$time=$_SESSION['time'];
	$fair1=$_SESSION['fair'];
	$bus_code=$_SESSION['bus_code'];
	$bus_type=$_SESSION['bus_type'];
	$route=$_SESSION['route'];
	$pass_name=array();
	$pass_age=array();
	$pass_gender=array();
	$seat_select=array();
	$i=0;
	$jdate=$_SESSION['date'];
	$bdate=date('Y/m/d');
	foreach($_SESSION['pass_name'] as $key=>$value)
		$pass_name[$i++]=$value;
	$i=0;
	foreach($_SESSION['pass_age'] as $key=>$value)
		$pass_age[$i++]=$value;
	$i=0;
	foreach($_SESSION['seat_select'] as $key=>$value)
		$seat_select[$i++]=$value;
	$i=0;
	foreach($_SESSION['pass_gender'] as $key=>$value)
		$pass_gender[$i++]=$value;
	if((isset($_POST['username'])||isset($_POST['UID']))&&isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$UID=$_POST['UID'];
		$pass_hash=md5($password);
		if(!empty($pass_hash)&&(!empty($username)||!empty($UID)))
		{
			$qry="Select * from `wallet_portal` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".$pass_hash."' OR `uid` = '".mysql_real_escape_string($UID)."'  AND `password` = '".$pass_hash."'";

			if($qry_run=mysql_query($qry))
			{
				if (mysql_num_rows($qry_run)==1)
				{
					$query = "SELECT * FROM `wallet_amt` WHERE `username` = '".mysql_real_escape_string($username)."' OR `uid` = '".mysql_real_escape_string($UID)."'";
					if($query_run=mysql_query($query))
					{
						$row=mysql_fetch_assoc($query_run);
						if($row['amt']>=$_SESSION['fair']*$count)
						{
							$diff=$row['amt']-$_SESSION['fair']*$count;
							$q3="UPDATE `wallet_amt` Set `amt` = ".$diff." WHERE `username` = '".mysql_real_escape_string($username)."' OR `uid` = '".mysql_real_escape_string($UID)."'";
							mysql_query($q3);

							?>
							<script ="text/JavaScript">
								alert('transaction Succesful');
							</script>
							<?php
							$status=1;
							for($i=0;$i<$count;$i++)
							{
								$q4="Insert INTO `bookings` values('".$jdate."','".$bdate."','".$_SESSION['username1']."','".$seat_select[$i]."','".$bus_code."',".$status.",'".$pass_name[$i]."',".$pass_age[$i].",'".$pass_gender[$i]."')";
								if($q4_run=mysql_query($q4))
								{
								}
								else
									$flag=1;
							}
							if ($flag==0)
							{
								$q5="Insert into `transactions` values('".$_SESSION['username1']."','".$bdate."','Wallet',".$_SESSION['fair']*$count.",0,".$diff.")";

								if(mysql_query($q5))
								{
								}
								else
									echo "error3";
							$_SESSION['booking_success']=1;
							?>
							<script ="text/JavaScript">
							alert("Booking Succesful:");
							</script>
							<?php
									header('Location:ticketprintfinalpage.php');
							}
							else
								echo 'error1';
					//Insert entry in bookin table
						}
						else
							{?>
				<script ="text/JavaScript">
				alert('Insufficient wallet balance ');
				</script>

			<?php

				}

					}
					else echo 'error2';

				}

				else
				{?>
				<script ="text/JavaScript">
				alert('Authentication Unsuccessful \n If you haven\'t registered for wallet please register and recharge to continue');
				</script>

				<?php
					$f1=1;
				}
			}
			else echo 'error';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>



	<style type="text/css">

	html, body {
	margin:0;

	padding:0;
	}
body{
background-image: url("image2.jpg");
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








														    .signin {
														      z-index: 1;
														      background: #FFFFFF;
														      width: 360px;
														      margin: 0 auto 100px;
														      padding: 50px;
														      text-align: center;
														      opacity: 0.9;
														      overflow: auto;
														      margin-top: 5%;
														      margin-left: 640px;
														      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
														    }
														    .signin select {
														      font-family: "Roboto", sans-serif;
														      outline: 0;
														      background: #f2f2f2;
														      width: 100%;
														      border: 0;
														      margin: 0 0 15px;
														      padding: 15px;
														      box-sizing: border-box;
														      font-size: 14px;
														    }

														    .signin input {
														      font-family: "Roboto", sans-serif;
														      outline: 0;
														      background: #f2f2f2;
														      width: 100%;
														      border: 0;
														      margin: 0 0 15px;
														      padding: 15px;
														      box-sizing: border-box;
														      font-size: 14px;
														    }
														    .signin select {
														      font-family: "Roboto", sans-serif;
														      outline: 0;
														      background: #f2f2f2;
														      width: 100%;
														      border: 0;
														      margin: 0 0 15px;
														      padding: 15px;
														      box-sizing: border-box;
														      font-size: 14px;
														    }

														    .signin input.submit {
														      font-family: "Roboto", sans-serif;
														      text-transform: uppercase;
														      outline: 0;
														      background: #5C6BC0;
														      width: 100%;
														      border: 0;
														      padding: 15px;
														      color: #FFFFFF;
														      font-size: 14px;

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
								        <a href="cancel.php">Cancel Ticket</a>
												 <a href="ab.php">Create wallet</a>
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


							<div class="unibody">

<form action="payment.php" class="signin" method="post" onsubmit="return submit1();">
		<h3>	       Wallet Authentication</h3>
		<br/> <input type="text" id="username" name="username" placeholder="username"><br/>
				OR<br/>
	<br/>	 <input type="text" id="UID" name="UID" placeholder="UID"><br/>
	<br/>	<input type="password" name="password" placeholder="password"><br/>	<br/>
	<input type="submit" value ="proceed to pay Rs<?php echo $_SESSION['fair']*$count;?>" name="submit">
</form>
<div>
<script ="text/JavaScript">
function submit1()
{
	var x=document.getElementById("username").value;
	var y=document.getElementById("UID").value;
	if(x!=""||y!="")
		return true;
	else
	{
		alert("you must enter either username or UID");
		return false;
	}
}

</script>

</body>

</html>
