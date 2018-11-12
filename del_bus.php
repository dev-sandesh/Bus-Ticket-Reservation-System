<?php
require 'man_req1.php';?>
<html>

<head>

<style>


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
.unibody
 {
   float: left;
   margin-top: 90px;
   background: #FFFFFF;
   margin-left: 80px;
   height: 400px;
   padding: 50px;
   width: 1000dpi;
   max-height: 500px;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;
    opacity: 0.8;

 }


 table {
   width: 100%;
    font-size: 130%;
   max-width: 1000px;
   height: 320px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }

 th {
   background-color: #034f84;
   height: 54px;
   width: auto;
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


 #inline
 {
     text-align:center;
 }
 #nav, #unibody
 {
     display:inline-block;
 }

td{
	text-align:center;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 200px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

input[type=text],[type=password]{
    width: 50%;
    padding: 12px 20px;
   margin-top:8px;
	margin-left: 400px;
	margin-bottom:8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 50%;
    background-color: #5C6BC0;
    color: white;
    padding: 14px 20px;
    margin-top:8px;
	margin-left: 80px;
	margin-bottom:8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
label{
	margin-top:8px;
	margin-left: 400px;
	margin-bottom:8px;
}
input[type=submit]:hover {
    background-color: #45a049;
}

</style>
</head>


<body>
	<div id="myModal" class="modal" >

	  <!-- Modal content -->
	  <div class="modal-content " >

	    <span class="close">&times;</span>
		<h1>MANAGER LOGIN</h1>
	    <div>
	  <form action="Authenticate.php" method="POST">
	    <label for="username">MANAGER USERNAME</label></br>
	    <input type="text" id="username" name="user" placeholder="username.." required="required"></br>

	    <label for="password">password</label></br>
	    <input type="password" id="password" name="password" placeholder="password.." required="required"></br>


	    <input type="submit" value="LOGIN">
	  </form>
	</div>
	  </div>

	</div>
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
    <li style="float:left"><a href="file7.php">Add Bus</a></li>
    <li style="float:left"><a href="modify2.php">Modify Bus Details</a></li>
    <li style="float:left" ali><a href="del_bus.php">Delete Specific Bus</a></li>
    <li style="float:left"><a href="#">Add stops</a></li>
    <li style="float:left"><a  href="report1.php">Generate Transaction Report</a></li>


  </div>
  <div style="width: 1200px; overflow: auto; height: 650px;" class="unibody">
    <div class="container">
<?php
require 'connect.php';
if(isset($_POST['bus_select']))
{
	$bcode=$_POST['bus_select'];
	if(!empty($bcode))
	{
		$quer4="delete from `bus_info` where `bus_code`='".$bcode."'";
		if($q=mysql_query($quer4))
		{
		}
		else
			echo "failed";
	}
}
$arr=array('source'=>array(),'destination'=>array(),'time'=>array(),'fair'=>array(),'Bus_Type'=>array(),'Bus_Code'=>array(),'Route_No'=>array());
		$q="Select * from `bus_info`";
		$i=0;
		if($q_run=mysql_query($q))
		{
			while($row=mysql_fetch_assoc($q_run))
			{
				$arr['source'][$i]=$row['source'];
				$arr['destination'][$i]=$row['destination'];
				$arr['time'][$i]=$row['time'];
				$arr['fair'][$i]=$row['fair'];
				$arr['Bus_Type'][$i]=$row['bus_type'];
				$arr['Bus_Code'][$i]=$row['bus_code'];
				$arr['Route_No'][$i++]=$row['route_no'];
			}
		}
		else
		{
			echo 'error45345';
		}
	  ?>
    <h3>Delete Bus</h3>
     <form action="" method="Post">
    <table class="heavyTable">
     <thead>
       <tr>
	     <th>CHOOSE</th>
         <th>SOURCE</th>
         <th>DESTINATION</th>
         <th>TIME</th>
         <th>FAIR</th>
		 <th>BUS TYPE</th>
		 <th>BUS CODE</th>
		 <th>ROUTE NO.</th>
       </tr>
	   </thead>

	   <tbody>
			<?php
			$j=0;
			while ($j<$i)
			{
			?>

			<tr>
				<td><input type='radio' id="rdbtn" name ='bus_select' value="<?php echo $arr['Bus_Code'][$j];?>" required="required"></td>
				<td><?php echo $arr['source'][$j];?></td>
				<td><?php echo $arr['destination'][$j];?></td>
				<td><?php echo $arr['time'][$j];?></td>
				<td><?php echo $arr['fair'][$j];?></td>
				<td><?php echo $arr['Bus_Type'][$j];?></td>
				<td><?php echo $arr['Bus_Code'][$j];?></td>
				<td><?php echo $arr['Route_No'][$j];?></td>
			</tr>

			<?php
			$j++;
			}
			?>

	   </tbody>

	   </table>
	   <input type="submit" value="proceed" id="btn1">
	   </form>
	   </div>

</div>
</body>
</html>
