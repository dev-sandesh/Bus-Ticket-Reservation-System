<?php
session_start();

require 'connect.php';
$cancel=array();
$i=0;
$f=0;
$refund=0;
foreach ($_POST['seat'] as $r=>$value)
{
	$cancel=explode(",",$value);

	$q="Update `bookings` set `status` = 0 where `journey_date` = '".$cancel[2]."' AND `bus_code` = '".$cancel[1]."' AND `username` = '".$_SESSION['username1']."' AND `seat` = '".$cancel[0]."'";
	if($q_run=mysql_query($q))
	{

	$i++;
	$q="Select `fair`,`bus_type` from `bus_info` where `bus_code` = '".$cancel[1]."'";
	if($q_run=mysql_query($q))
	{
		$row=mysql_fetch_assoc($q_run);
		if ($row['bus_type']=="AC")
			$refund=$refund+0.75*$row['fair'];
		else
			$refund=$refund+0.8*$row['fair'];
	}
	else
	{
		$f=1;
		break;
	}
	}
	else{
		echo 'error';
		$f=1;
		break;
	}
}
if($f!=1)
{
	$q0="Select `amt` from `wallet_amt` where `username` = '".$_SESSION['username1']."'";
	if($q0_run=mysql_query($q0))
	{
		$row=mysql_fetch_assoc($q0_run);
		$refund1=$refund+$row['amt'];
		$q1="update `wallet_amt` set `amt` = ".$refund1." where `username` = '".$_SESSION['username1']."'" ;
		if($q1_run=mysql_query($q1))
		{
			$cdate=date('Y/m/d');
			$q2="Insert into `transactions` values('".$_SESSION['username1']."','".$cdate."','Ticket cancellation',0,".$refund.",".$refund1.")";
			if($q2_run=mysql_query($q2))
			{

				$_SESSION['cancel_refund']=1;

			}
			else
				echo 'error3';
		}
		else
			echo  'errorn';
	}
	else
		echo 'errorm';
}
else
	echo 'error';
//update transaction table
header('location:cancel.php');
?>
