<?php
require 'connect.php';
if(isset($_POST['busn'])&&isset($_POST['orn'])&&isset($_POST['dest'])&&isset($_POST['tm'])&&isset($_POST['dist'])&&isset($_POST['pref'])&&isset($_POST['route']))
{
	$busno=$_POST['busn'];
	$Origin=$_POST['orn'];
	$Destination=$_POST['dest'];
	$TTime=$_POST['tm'];
	$fair=$_POST['dist'];
	$Preferences=$_POST['pref'];
	$route_no=$_POST['route'];
	if(!empty($busno)&&!empty($Origin)&&!empty($Destination)&&!empty($TTime)&&!empty($fair)&&!empty($Preferences)&&!empty($route_no))
	{
			$SQL="INSERT INTO bus_info VALUES ('$Origin','$Destination','$TTime','$fair','$Preferences','$busno','$route_no')";
			if($insert=mysql_query($SQL))
			{
				?>
				<script ="text/JavaScript">
				alert('One Bus Info added to database');
				</script>
				<?php
			}
else {
	?>
	<script ="text/JavaScript">
	alert('Bus Code in use');
	</script>
<?php
}
		}
		else {
			echo 'Enter all fields';
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
		<h3>Add Bus</h3>
    <form method="POST" action="file7.php">
      <div class="log">
        <input type="text" placeholder="Origin" name="orn" >
        <input type="text" placeholder="Destination" name="dest" >
        <input type="Time" placeholder="TIME" name= "tm"  >
        <input type="text" placeholder="fare" name="dist" >
        <input type="text" placeholder="Route" name="route" >
        <select name="pref" name="pref">
            <option value="AC">AC</option>
            <option value="non-AC">non-AC</option>
        </select>
        <input type="text" placeholder="Bus Code" name="busn">
        <button name="login" type="submit" > Submit </button>
 </form>

</div>
</div>
</div>

</body>
</html>
