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
      height: 490px;
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
   width: 150%;
   max-width: 1200px;
  font-size: 130%;
   height: 320px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }

 th {
    background-color: #034f84;
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

</style>
</head>


<body>

  <ul class="a">
      <li><a href="home">HOME</a></li>
      <li style="float:right"><a href="Log Out">LOGOUT</a><li>
      <li style="float:right"><a href="about">ABOUT</a></li>
      <li><a href="help">HELP</a></li>
  </ul>


<div class="inline">
  <div class="nav">
  <ul class="b">


    <li style="float:left"><a href="file3.php">View All Users</a></li>
    <li style="float:left"><a href="file4.php">Search specific User</a></li>
    <li style="float:left"><a href="file5.php">View all Bus</a></li>
    <li style="float:left"><a href="file6.php">Search Specific Bus</a></li>
	  <li style="float:left"><a href="file7.php">Add Bus</a></li>
    <li style="float:left"><a href="#">Modify Bus Details</a></li>
    <li style="float:left" ali><a href="#">Delete Specific Bus</a></li>
	  <li style="float:left"><a href="#">Add stops</a></li>


  </div>
    <div style="width: 1200px; overflow: auto; height: 650px;" class="unibody">
      <div class="container">
	  <?php
		require 'connect.php';
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
        <table class="heavyTable">
     <thead>
       <tr>
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
				<td><?php echo $arr['source'][$j];?></td><td><?php echo $arr['destination'][$j];?></td><td><?php echo $arr['time'][$j];?></td><td><?php echo $arr['fair'][$j];?></td><td><?php echo $arr['Bus_Type'][$j];?></td><td><?php echo $arr['Bus_Code'][$j];?></td><td><?php echo $arr['Route_No'][$j];?></td>
			</tr>
			<?php
			$j++;
			}
			?>
	   </tbody>

    </div>

</div>

</body>
</html>
