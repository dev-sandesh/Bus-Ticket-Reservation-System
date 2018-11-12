<?php require 'man_req1.php'?>

<?php
require 'connect.php';
if(isset($_POST['bus_select']))
{
	$b=$_POST['bus_select'];
	if(!empty($b))
	{
		$_SESSION['oldbus']=$b;
		$q="Select * from `bus_info` where `bus_code` = '".$b."'";
		$q_run=mysql_query($q);
		$row=mysql_fetch_assoc($q_run);
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
		      background-image: url("1600.jpg");
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

		      ul.b
		    {   float: left;
		        font-size: 110%;
		        display: inline-block;
		        list-style-type: none;
		        margin-left: 10px;
		        margin-top: 120px;
		        padding: 10px;
		        height: 520px;
		        width: 200px;
		        background: linear-gradient(#141E30,#243B55 );
		        border-top-right-radius:  1em;
		        border-bottom-right-radius: 1em;
		        opacity: 0.9;

		    }

		   .b li a{
		        float:right;
		        position: relative;
		        color: #edf3ff;
		        padding: 15px 16px;
		        text-decoration: none;
		        font-size: 16px;
		        font-family: "Open Sans", arial;
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
		      margin-top: 80px;
		      margin-left: 640px;
		      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
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
				input[type=submit] {
				    color: white;
				    background-color: #5C6BC0;
				}
				input[type=submit]:hover {

				    background-color: #45a049;
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

		    .signin button {
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
				#sel1, #sel2 {
				   float: left;
		display: flex;

				}

		</style>
		</head>

		<body>

		    <ul class="a">
		        <li><a href="testfile1.php">HOME</a></li>
		        <li style="float:right"><a href="mlogout.php">LOGOUT</a><li>
		    </ul>


		  <div class="inline">
		    <div class="nav">
		    <ul class="b">


		      <li style="float:left"><a href="file3.php">View All Users</a></li>
		      <li style="float:left"><a href="file4.php">Search specific User</a></li>
		      <li style="float:left"><a href="file5.php">View all Bus</a></li>
		      <li style="float:left"><a href="file6.php">Search Specific Bus</a></li>
					<li style="float:left"><a href="recharge.php">Recharge Wallet</a></li>
<li style="float:left"><a  href="file7.php">Add Bus</a></li>
		      <li style="float:left"><a href="modify2.php">Modify Bus Details</a></li>
		      <li style="float:left" ali><a href="del_bus.php">Delete Specific Bus</a></li>
		      <li style="float:left"><a href="#">Add stops</a></li>
					<li style="float:left"><a  href="report1.php">Generate Transaction Report</a></li>

		</div>
		</div>
		<div class"box">
		<div class="signin">
			<h3>Fill new Bus Details</h3>
		<form  action="" method="POST">
      <input type="text"  value="<?php echo $row['source'];?>"	name="source" required><br>
      <input type="text"  value="<?php echo $row['destination'];?>" 	name="destination" required><br>
      <input type="text"  value="<?php echo $row['time'];?>"	name="time" required><br>
      <input type="text"  value="<?php echo $row['fair'];?>" 	name="fair" required><br>
      <input type="text"  value="<?php echo $row['bus_type'];?>" 	name="Bus_Type" required><br>
      <input type="text"  value="<?php echo $row['bus_code'];?>" 	name="Bus_Code" required><br>
      <input type="text"  value="<?php echo $row['route_no'];?>" 	name="Route_No" required><br>
      <input type="submit" value="Modify">
      </form>
		<?php
	}
}
else if(isset($_POST['source'])||isset($_POST['destination'])||isset($_POST['time'])||isset($_POST['fair'])||isset($_POST['Bus_Type'])||isset($_POST['Bus_Code'])||isset($_POST['route_no']))
	{

		if((!empty($_POST['source']))||(!empty($_POST['destination']))||(!empty($_POST['time']))||(!empty($_POST['fair']))||(!empty($_POST['Bus_Type']))||(!empty($_POST['Bus_Code']))||(!empty($_POST['route_no'])))
		{

			$q="UPDATE `bus_info` SET `source`='".$_POST['source']."',`destination`='".$_POST['destination']."',`time`='".$_POST['time']."',`fair`=".$_POST['fair'].",`bus_type`='".$_POST['Bus_Type']."',`bus_code`='".$_POST['Bus_Code']."',`route_no`='".$_POST['Route_No']."' WHERE `bus_code`='".$_SESSION['oldbus']."'";
			if($q_run=mysql_query($q))
			{
				$_SESSION['update_success']=1;
				header('location:modify2.php');
			}
			else
				echo 'error';
		}
		else 'errork';
	}
	else
		echo 'errrrrr';
?>

</div>
</div>
</div>

</body>
</html>
