<?php
session_start();
if(isset($_SESSION['booking_success']))
{
  if($_SESSION['booking_success']==1)
  {
    ?>
    <script = "text/JavaScript">
      alert('Booking Sucessful');
      alert('Transaction Successful');
    </script>
    <?php
    $_SESSION['booking_success']=0;
  }
}
$ticketnumber=rand(10000,99999);
$bdate=date("Y/m/d");
$jdate=$_SESSION['date'];
$bus_code=$_SESSION['bus_code'];
$bus_type=$_SESSION['bus_type'];
$source=$_SESSION['source'];
$destination=$_SESSION['destination'];
$dep_time=$_SESSION['time'];
$fare=$_SESSION['fair'];
$pass_name=array();
$pass_age=array();
$pass_gender=array();
$seat_select=array();
$i=0;
foreach($_SESSION['pass_name'] as $key=>$value)
{

  $pass_name[$i++]=$value;
}
$i=0;
foreach($_SESSION['pass_age'] as $key=>$value)
{
  $pass_age[$i++]=$value;
}
$i=0;
foreach($_SESSION['pass_age'] as $key=>$value)
{
  $pass_gender[$i++]=$value;
}
$i=0;
foreach($_SESSION['seat_select'] as $key=>$value)
{

  $seat_select[$i++]=$value;
}
?>

<!doctype html>
<head>
<style>

h2{
font-family: "consolas";
text-decoration: underline;
font-size: 2rem;
}


ul.b{
list-style-type: none;
margin-left: 10px;
font-family: "consolas";
font-size: 1.5rem;
}


.a li{
      position: relative;
      overflow: hidden;
      display: inline;
      float: left;
      text-decoration: none;
      font-size: 1.5rem;
  }


  .bc
  {
    float: left;
    margin-top: 10px;
    background: #ffffff;
    height: auto;
    padding: 50px;
    width: 1200px;
    border-radius: 0.5em;
  }

</style>
</head>

<body onload="window.print();">



<!-- OUTSIDE COVER BOX -->

<div class="box">



<div class="bc">

  <h1 style="margin-left: 370px">BOOK MY BUS<h1>
  <h2 style="margin-left: 380px">BUS TICKET</h2>

<ul class="b">

</br></br>
<li>ETICKET:<?php echo $ticketnumber; echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?> BOOKING DATE: <?php echo $bdate;?></li>
</br></br>
<li>SOURCE: <?php echo $source; echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?>DESTINATION: <?php echo $destination;?></li>
</br></br>
<li>TIME:<?php echo $dep_time; echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?>  BUS CODE:<?php echo $bus_code; echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?> BUS TYPE:<?php echo $bus_type;?></li>
</br></br>
<li>PASSENGER DETAILS</li>
<?php
$j=0;
while($j<$i)
{
?>
<hr>
<li style="margin-left: 50px;">PASSENGER NAME:<?php echo $pass_name[$j]; echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?> AGE:<?php echo $pass_age[$j]; echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?> GENDER:<?php echo $pass_gender[$j]; echo '&nbsp&nbsp&nbsp&nbsp&nbsp';?> SEAT:<?php echo $seat_select[$j];?></li>
<hr>
<?php
$j++;
}
?>


</br></br>
<li>TOTAL FARE: <?php  echo $fare;?></li>
<hr>
<li style="margin-left:300px">TERMS AND CONDITION</li>
<hr>
<li style="margin-left: 30px">-Passenger are requested to report 15 minutes departure time.</li>
<li style="margin-left: 30px">-In case of cancellation 20% fee will be deducted.</li>

</ul>
<button style="float:right" onClick="window.print();">Print Ticket</button>
<form action = "testfile1.php" method="POST" >
<input type="submit"  value="back" style="float:left" >
</form>
</body>
