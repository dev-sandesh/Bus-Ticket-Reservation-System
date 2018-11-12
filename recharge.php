<?php
require 'connect.php';
if(isset($_POST['username'])&&isset($_POST['amt']))
{
	$username=$_POST['username'];
	$amt=$_POST['amt'];
	if(!empty($username)&&!empty($amt))
	{
		$query = "SELECT * FROM `wallet_amt` WHERE `username` = '".mysql_real_escape_string($username)."'";
					if($query_run=mysql_query($query))
					{
						if (mysql_num_rows($query_run)==1)
						{
							$row=mysql_fetch_assoc($query_run);

							$diff=$row['amt']+$amt;
							$q3="UPDATE `wallet_amt` Set `amt` = ".$diff." WHERE `username` = '".mysql_real_escape_string($username)."'";
							mysql_query($q3);
							$q5="Insert into `transactions` values('".$username."','".date("Y/m/d")."','Recharge',0,".$amt.",".$diff.")";
							if(mysql_query($q5))
							{
								?>
								<script = "text/JavaScript">
							alert(' Recharge Successful!  Amount Added to the wallet');
							</script>
								<?php
							}

						}
						else
						{
							?>
							<script = "text/JavaScript">
							alert('Invalid Username');
							</script>
							<?php
						}
					}
	}
}
else if(isset($_POST['UID'])&&isset($_POST['amt']))
{
	$uid=$_POST['UID'];
	$amt=$_POST['amt'];
	if(!empty($uid)&&!empty($amt))
	{
		$query = "SELECT * FROM `wallet_amt` WHERE `uid` = '".mysql_real_escape_string($uid)."'";
					if($query_run=mysql_query($query))
					{
						if (mysql_num_rows($query_run)==1)
						{
							$row=mysql_fetch_assoc($query_run);

							$diff=$row['amt']+$amt;
							$q3="UPDATE `wallet_amt` Set `amt` = ".$diff." WHERE `uid` = '".mysql_real_escape_string($uid)."'";
							mysql_query($q3);
							$qw="Select `username` from `wallet_portal` where `UID` = ".$uid;
							$qw_run=mysql_query($qw);
							$row1=mysql_fetch_assoc($qw_run);
							$q5="Insert into `transactions` values('".$row1['username']."','".date("Y/m/d")."','Recharge',0,".$amt.",".$diff.")";
							if(mysql_query($q5))
							{
								?>
								<script = "text/JavaScript">
							alert(' Recharge Successful!  Amount Added to the wallet');
							</script>
								<?php
							}

						}
						else
						{
							?>
							<script = "text/JavaScript">
							alert('Invalid UID');
							</script>
							<?php
						}
					}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> 101 </title>
  <meta charset="utf-8" />
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
							      margin-top: 8%;
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
						<li style="float:right"><a href="login.php">LOGIN</a><li>
						<li style="float:right"><a href="file3.php">EMPLOYEE PORTAL</a></li>
				</ul>



<form class="signin" method="post" onSubmit="return submit1();">
	<input type="text" id="username" name="username" placeholder="username"> <strong>OR</strong> <input type="text" name="UID" id="UID" placeholder="UID" >
	</br><input type="text" name="amt" placeholder="Amount" required></br>
	<input class="what" type="Submit" value="Recharge">
</form>
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
