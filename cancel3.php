<html>
<head>
<style>
select {
    min-width:150px;
    min-height: 25px;
}

body{
    background-image: url("1600.jpg");
    }


</style>
<head>
</html>
<?php
	session_start();
	require 'style.html';
	require 'connect.php';
	$arr=array();
	$query="Select `bus_code` from `bus_info`";
	$query_run=mysql_query($query);
	if(isset($_POST['bus_code']))
	{
		$p=0;

		$bus_code=$_POST['bus_code'];
		$jdate=$_POST['jdate'];
		if((!empty($bus_code))&&(!empty($jdate)))
		{
			$q="SELECT * from `bookings` where `username`='".$_SESSION['username1']."' AND `bus_code`= '".$bus_code."' AND `journey_date`='".$jdate."' AND `status`=1";
			if($q_run=mysql_query($q))
			{
			}
			else
				echo mysql_error();
			$q_num_rows=mysql_num_rows($q_run);
			if($q_num_rows>=1)
			{
				?>

				<form action="cancel2.php" method="post" onSubmit="return submit1()">
				<table>
				<tr>
					<td>   </td><td>Journey Date</td><td>Booking date</td><td>Username</td><td>seat</td><td>Bus code</td><td>Passenger</td><td>Age</td><td>Gender</td>
				</tr>
				<?php
				while($row=mysql_fetch_assoc($q_run))
				{
					$arr[$p++]=$row['seat'];
					$_SESSION['date']=$jdate;
					$_SESSION['bus_code']=$bus_code;
					?>
					<tr>
						<td><input type="checkBox" name="seat[]" value="<?php echo $row['seat']?>" id="<?php echo $row['seat']?>" checked></td><td><?php echo $row['journey_date'];?></td><td><?php echo $row['booking_date'];?></td><td><?php echo $row['username'];?></td><td><?php echo $row['seat'];?></td><td><?php echo $row['bus_code'];?></td><td><?php echo $row['pass_name'];?></td><td><?php echo $row['age'];?></td><td><?php echo $row['gender'];?></td>
					<tr>
					<?php
				}
				?>
				</table>
				<input type="submit" value="Cancel Ticket">
				</form>
				<script = "text/JavaScript">
				function submit1()
				{
					try
					{
						var arr=<?php echo json_encode($arr);?>;
						var i=0;
						for(i=0;i<arr.length;i++)
						{
							if(document.getElementById(arr[i]).checked)
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
				<?php
			}
			else
			{
				?>
				<script = "text/JavaScript">
				alert("No Such Booking/Booking Already Cancelled");
				</script>
			<?php
			}
		}
	}
	else
	{
?>
<form action="cancel.php" method="post">
	<select name="bus_code" id="bus_code" required>
		<option value="">Choose bus code</option>
		<?php
			while($row=mysql_fetch_assoc($query_run))
			{
		?>
			<option value="<?php echo $row['bus_code'];?>"><?php echo $row['bus_code'];?></option>
		<?php
			}
		?>
	</select>
	<input type="date" name="jdate" id="date_of_journey" required>
	</br>
	<input type="submit" name="submit" value="proceed">
</form>
<script ="text/JavaScript">
      var input = document.getElementById("date_of_journey");
      var today = new Date();
      var day = today.getDate();

      // Set month to string to add leading 0
      var mon = new String(today.getMonth()+1); //January is 0!
      var yr = today.getFullYear();
	  day++;

        if(mon.length < 2) { mon = "0" + mon; }
        if(day.length < 2) { dayn = "0" + day; }
        var date = new String( yr + '-' + mon + '-' + day );

      input.disabled = false;
      input.setAttribute('min',date);
	 </script>
	 <?php
	 }
	 ?>
