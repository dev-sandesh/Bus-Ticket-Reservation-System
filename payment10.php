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
echo $row['amt'];
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
							?>
							<script ="text/JavaScript">
							alert("Booking Succesful:");
							</script>
							<?php
									//header('Location:ticket.php');
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
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style type="text/css">

  body{
      background-image: url("image2.jpg");
      }

			      ul.a{
			        list-style-type: none;
			        margin-top: 0;
			        padding: 0;
			        overflow: hidden;
			        background: linear-gradient(#141E30,#243B55 );
			        border-radius: 5px;
			        opacity: 0.8;

			        }

			      .a li a{
			            float: left;
			            display: block;
			            color: white;
			            text-align: center;
			            padding: 18px 25px;
			            text-decoration: none;
			            font-size: 110%;
			        }
			        li a:hover
			        {
			          background-color: #b4b9c1;
			          color: white;
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

														    .signin input.what {
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


								    <ul class="a">
								        <li><a href="testfile1.php">HOME</a></li>

								        <li style="float:right"><a href="about">ABOUT</a></li>
								        <li><a href="help">HELP</a></li>
												<li><a href="recharge.php">WALLET RECHARGE</a><li>
								        <li style="float:right"><a href="ab.php">CREATE WALLET</a></li>;
								    </ul>

							<div class="unibody">

<form action="payment.php" class="signin" method="post" onsubmit="return submit1();">
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
