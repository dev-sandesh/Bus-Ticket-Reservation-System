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
echo 'E-Ticket Number:  '.rand(10000,99999);
echo 'Booking Date = '.date("Y/m/d");
echo 'Journey date = '.$_SESSION['date'];
echo 'Bus Code = '.$_SESSION['bus_code'];
echo 'Bus Type = '.$_SESSION['bus_type'];
echo 'Source = '.$_SESSION['source'];
echo 'Destination = '.$_SESSION['destination'];
echo 'Departure Time ='.$_SESSION['time'];
$pass_name=array();
$pass_age=array();
$pass_gender=array();
$seat_select=array();
$i=0;
foreach($_SESSION['pass_name'] as $key=>$value)
{
  echo $value;
  $pass_name[$i++]=$value;
}
$i=0;
foreach($_SESSION['pass_age'] as $key=>$value)
{
echo $value;
  $pass_age[$i++]=$value;
}
$i=0;
foreach($_SESSION['seat_select'] as $key=>$value)
{
echo $value;
  $seat_select[$i++]=$value;
}
?>
