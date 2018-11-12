<?php
session_start();?>
<?php
require 'connect.php';
$source=array();
$destination=array();
$time=array();
$fair=array();
$bus_code=array();
$bus_type=array();
$route_no=array();
$i=0;
if(isset($_POST['bussearch1']))
{
  echo 'shhhhh';
  $bus=$_POST['bussearch1'];
  if(!empty($bus))
  {
      $query="select * from `bus_info` where `route_no` in (select distinct `up_route_no` from `route` where `city`='".$bus."')";
      $query1="select * from `bus_info` where `route_no` in (select distinct `down_route_no` from `route` where `city`='".$bus."')";
      if(($q_run=mysql_query($query))&&($q_run1=mysql_query($query1)))
      {
          while($row=mysql_fetch_assoc($q_run))
          {
                $source[$i++]=$row['source'];
                $destination[$i++]=$row['destination'];
                $time[$i++]=$row['time'];
                $fair[$i++]=$row['fair'];
                $bus_code[$i++]=$row['bus_code'];
                $bus_type[$i++]=$row['bus_type'];
                $route_no[$i++]=$row['route_no'];
          }
          while($row=mysql_fetch_assoc($q_run1))
          {
                $source[$i++]=$row['source'];
                $destination[$i++]=$row['destination'];
                $time[$i++]=$row['time'];
                $fair[$i++]=$row['fair'];
                $bus_code[$i++]=$row['bus_code'];
                $bus_type[$i++]=$row['bus_type'];
                $route_no[$i++]=$row['route_no'];
          }
          $_SESSION['search_source']=$source;
          $_SESSION['search_destination']=$destination;
          $_SESSION['search_time']=$time;
          $_SESSION['search_fair']=$fair;
          $_SESSION['search_bus_type']=$bus_code;
          $_SESSION['search_bus_code']=$bus_type;
          $_SESSION['search_route_no']=$route_no;
          header('location:route_search.php');
      }
      else
        echo '112323';
  }
}
else if(isset($_POST['bussearch2']))
{
echo 'shhhhh';
  $bus=$_POST['bussearch2'];
  if(!empty($bus))
  {
      $query="Select * from `bus_info` where `route_no`='".$bus."'";
      if($q_run=mysql_query($query))
      {
          while($row=mysql_fetch_assoc($q_run))
          {
                $source[$i++]=$row['source'];
                $destination[$i++]=$row['destination'];
                $time[$i++]=$row['time'];
                $fair[$i++]=$row['fair'];
                $bus_code[$i++]=$row['bus_code'];
                $bus_type[$i++]=$row['bus_type'];
                $route_no[$i++]=$row['route_no'];
          }
          $_SESSION['search_source']=$source;
          $_SESSION['search_destination']=$destination;
          $_SESSION['search_time']=$time;
          $_SESSION['search_fair']=$fair;
          $_SESSION['search_bus_type']=$bus_code;
          $_SESSION['search_bus_code']=$bus_type;
          $_SESSION['search_route_no']=$route_no;
          header('location:route_search.php');
      }
      else
        echo '112323';
  }
}
?>
<html>

<head>

<style>

body{
    background-image: url("1600.jpg");
     background-attachment: fixed;

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
  .hr
  {
  padding: 200px;
  }


.search {     float: left;
              width: 750px; height: 50px;
              margin-top: 220px;
              margin-left: 300px;
              background: #444;background: rgba(0,0,0,.2);
              border-radius:  3px;border: 1px solid #fff;}



.search input {
              width: 550px; padding: 15px 5px;
              height: 50px;
              float: left;color: white;

              font-size: 120%;
              border: 0;background: transparent ;
              border-radius: 3px 0 0 3px;}

.search input:focus {
                      width: 600px;
                      outline: 0; background:transparent;
                    }

.search button {position: relative;
                      float: right;border: 0;padding: 0;
                     cursor: pointer;height: 50px;
                        width: 100px;color: #fff;background: transparent;
                    border-left: 1px solid #fff;border-radius: 0 3px 3px 0;}

.search button:hover {background: #fff;color:#444;}
.search button:active {box-shadow: 0px 0px 12px 0px rgba(225, 225, 225, 1);}

.search button:focus {outline: 0;}

.search1
{
position: relative;
float: left;
}
.search2
{
float: left;
margin-bottom: : 200px;
}

 #inline
 {
     text-align:center;
 }
 #nav, #unibody
 {
     display:inline-block;
 }

 .inline {
   display: block;
 }
 .inline > div {
   flex: 1; /*grow*/
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
      <li style="float:left"><a href="#">Users</li>
    	    <li style="float:left"><a href="file3.php">View All Users</a></li>
    	    <li style="float:left"><a href="file4.php">Search specific User</a></li>
    	    <li style="float:left"><a href="#">Bus Details</a></li>
    	    <li style="float:left"><a href="viewbusses.php">View all Bus</a></li>
    	    <li style="float:left"><a href="viewspecificbus.php">Search Specific Bus</a></li>
    		<li style="float:left"><a ID="myBtn1" href="#?id=1">Add Bus</a></li>
    	    <li style="float:left"><a ID="myBtn2" href="#?id=2">Modify Bus Details</a></li>
    	    <li style="float:left" ><a ID="myBtn3" href="#?id=3">Delete Specific Bus</a></li>
    		<li style="float:left"><a ID="myBtn4" href="#?id=4">Add stops</a></li>
    	</ul>
</div>
</div>
<div class="search1">
<form class="search" action="#" method="POST">
      <input type="search" placeholder="By City" name='bussearch1' required>
<button type="submit">Search</button>
</form>
</div>
<div class="search2">
 <form class="search" action="#" method="POST">
      <input type="search" placeholder="By Route Number" name='bussearch2' required>
      <button type="submit">Search</button>
 </form>
</div>
