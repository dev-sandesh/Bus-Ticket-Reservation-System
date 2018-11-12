<html>
<head>
<style>
select {
    min-width:150px;
    min-height: 25px;
}

</style>
<title>Bus Reservation</title>
<head>
</html>
<?php
session_start();
$_session['set']=0;

include 'req_login.php';
if (isset($_SESSION['username1'])&&!empty($_SESSION['username1']))
{
}
else
{
?>
<a href=login.php  >Sign in/Sign up </a>
<?php
}
?>
<a href=logout.php>Log out</a>
<?php

if((isset($_SESSION['username1'])&&!empty($_SESSION['username1'])))
{
	?>
	<a href="cancel.php">cancel Ticket</a>

<?php
}

else
{
	echo 'please login to access';
	?>
	<a href="" onClick = "alert('Please Login to Access')">cancel Ticket</a>
<?php
}
if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['time']))
{
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$time=$_POST['time'];
	if(!empty($source)&&!empty($destination)&&!empty($time))
	{
		 $_SESSION['source']=$source;
		 $_SESSION['destination']=$destination;
		$_SESSION['date']=$time;
		header('Location:test_search.php');
	}
	else
		echo 'Please fill in all the fields';
}

?>
<form action="testfile1.php" Method="POST" onSubmit="return submit1();">
<select name="source" id="source" >
	<option value=""> choose source</option>
<?php
	foreach($city as $r=>$city1)
	{
?>
	<option value="<?php echo $city1;?>"><?php echo $city1?></option>
	<?php
	}
	?>
</select>


<select name="destination" id="destination">
	<option value="" > choose destination</option>
<?php
	foreach($city as $r=>$city1)
	{
?>
	<option value="<?php echo $city1;?>"><?php echo $city1?></option>
	<?php
	}
	?>
</select>

	<input type="date" name="time" required="required" id="date_of_journey" >
	<input type="submit" value="Search" name="search">

</form>

<script = "text/JavaScript">
      var input = document.getElementById("date_of_journey");
      var today = new Date();
      var day = today.getDate();

      // Set month to string to add leading 0
      var mon = new String(today.getMonth()+1); //January is 0!
      var yr = today.getFullYear();
	  day++;

        if(mon.length < 2) { mon = "0" + mon; }
        if(day < 10) { day = "0" + day; }
        var date = new String( yr + '-' + mon + '-' + day );
      input.disabled = false;

      input.setAttribute("min", date);
	  function submit1()
	  {
		  var source=document.getElementById("source").value;
		  var destination=document.getElementById("destination").value;

		  if(source==""||destination=="")
		  {
			  alert('choose source and destination');
			  return false;
		  }
		  else if(source == destination)
		  {
			  alert('source  and destination must be different');
			  return false;
		  }
			  return true;
	  }
</script>
