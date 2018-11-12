<?php session_start(); ?>
<html>

<head>

<style>
html, body {
margin:0;

padding:0;
}

body
{
  background-image: url("1600.jpg");
}

body a{
  transition: 0.1s all;
	-webkit-transition: 0.1s all;
  font-family: 'Open Sans', sans-serif;
  background-color: #D3D3D3;
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
    font-size: 1.3rem;
    max-width: auto;
    background:transparent;
   color: #D3D3D3;
}

li a:hover {
    background-color: #fff;

}

.container
{   display: block;
    padding: 1px 10px 1px 0px ;
    height: auto;
    max-width: auto;
    font-family: "consolas";
    background: transparent;
}

.innernav
{
  display: block;
  margin-left: 0px;
  padding: 15px 50px 0 20px;
  background: #000;
  height: 70px;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width:140px;
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
   margin-left: 180px;
   height: 600px;
   width: 80%;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;
    opacity: 0.9;

 }


 table {
   width: 85%;
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
   width: auto;
   font-weight: lighter;
   text-shadow: 0 1px 0 #38678f;
   color: white;
   border: 1px solid #38678f;
   box-shadow: inset 0px 1px 2px #568ebd;
   transition: all 0.2s;
  font-family: "consolas";

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


  <div class="outernav">
  <div class="innernav">
  <div class="container">

    <ul>
      <li><a href="testfile1.php">Home</a></li>
      <li float="right"><a href="#">Contact</a></li>

      <li class="dropdown" margin-left="100px" style="float:right"><a href"#">User</a>
        <div class="dropdown-content">
          <a href="cancel.php">Cancel Tickets</a>
          <a href="user_bookings.php">Booking</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Log Out</a>
        </div>
      </li>
    </ul>

  </div>
  </div>
  </div>

    <div class="container">
<?php

if(isset($_SESSION['cancel_refund']))
{
  if($_SESSION['cancel_refund']==1)
  {
  ?>
  <script = "text/JavaScript">
  alert('Refund Successful');
  </script>
  <?php
  }
    $_SESSION['cancel_refund']=0;
}
require 'connect.php';
$date=date("Y/m/d");
$arr4=array();
$arr3=array('seat'=>array(),'bus_code'=>array(),'journey_date'=>array());
$arr=array('journey_date'=>array(),'booking_date'=>array(),'username'=>array(),'seat'=>array(),'bus_code'=>array(),'status'=>array(),'pass_name'=>array(),'age'=>array(),'gender'=>array());
$sql="select * from `bookings` where `username` = '".$_SESSION['username1']."' and `status` = 1";
$arr1=array();
$j=0;
if ($q_run=mysql_query($sql))
{
  $i=0;
  $q=0;
  while($row=mysql_fetch_assoc($q_run))
  {

    $arr['journey_date'][$i]=$row['journey_date'];
    $arr['booking_date'][$i]=$row['booking_date'];
    $arr['username'][$i]=$row['username'];
    $arr['seat'][$i]=$row['seat'];
    $arr['bus_code'][$i]=$row['bus_code'];
    $arr['status'][$i]=$row['status'];
    $arr['pass_name'][$i]=$row['pass_name'];
    $arr['age'][$i]=$row['age'];
    $arr['gender'][$i++]=$row['gender'];
  }
 ?>
 <div class="unibody">
 <form action="cancel2.php" method="post" onSubmit="return submit1()">
 <table class="HeavyTable">
   <thead>
     <th>Select</th>
     <th>journey_date</th>
     <th>booking_date</th>
     <th>username</th>
     <th>seat</th>
     <th>bus_code</th>
     <th>status</th>
      <th>pass_name</th>
       <th>age</th>
        <th>gender</th>
   </thead>
   <tbody>

 <?php
 while(mysql_num_rows($q_run)>$j+1)
 {
   $j++;

   $finish = $arr['journey_date'][$j];
   $t1=strtotime($date);
   $t2=strtotime($finish);
   if(($t2-86400)>$t1)
     {
       $q++;
       $arr4[$q-1]=$arr['seat'][$j];
       $arr3['seat']=$arr['seat'][$j];
       $arr3['bus_code']=$arr['bus_code'][$j];
       $arr3['journey_date']=$arr['journey_date'][$j];
       $y=$arr3['seat'].','.$arr3['bus_code'].','.$arr3['journey_date'];
       ?>
           <tr>
<td><input width="5%" type="checkBox" name="seat[]" value="<?php echo $y;?>" id="<?php echo $arr3['seat']?>" checked>
             <td><?php echo $arr['journey_date'][$j];?></td>
             <td><?php echo $arr['booking_date'][$j];?></td>
             <td><?php echo $arr['username'][$j];?></td>
             <td><?php echo $arr['seat'][$j];?></td>
             <td><?php echo $arr['bus_code'][$j];?></td>
             <td><?php echo $arr['status'][$j];?></td>
             <td><?php echo $arr['pass_name'][$j];?></td>
             <td><?php echo $arr['age'][$j];?></td>
             <td><?php echo $arr['gender'][$j];?></td>
           </tr>

       <?php
     }
 }
}
?>
</div>
</tbody>
</table>
<?php
if($q==0)
{
  echo '<h3>No Bookings</h3>';

}
else {

?>
<input type="submit" value="Proceed to cancel">
</form>
<?php } ?>
</div>
</div>
</body>
<html>
<script = "text/JavaScript">
function submit1()
{
  try
  {
    var arr2=<?php echo json_encode($arr4);?>;
    var q=<?php echo $q;?>;

    for(var i=0;i<q;i++)
    {
      if(document.getElementById(arr2[i]).checked)
        return true;
    }
    alert('Select atleast one booking for cancellation');
    return false;
  }
  catch(Exception)
  {
  }
}
</script>
