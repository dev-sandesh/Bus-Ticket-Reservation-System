<?php
session_start();
require 'style.html';
require 'connect.php';
$source=$_SESSION['source'];
$destination=$_SESSION['destination'];
$date=$_SESSION['date'];
$query = "SELECT * FROM `bus_info` WHERE `source` = '".mysql_real_escape_string($source)."' AND `destination` = '".mysql_real_escape_string($destination)."'";
if(isset($_POST['bus_select']))
{
	$radio_val=$_POST['bus_select'];
	if(!empty($radio_val))
	{
		$_SESSION['bus_code']=$radio_val;
		header('Location:booking.php');
	}		
}
if($query_run=mysql_query($query))
{
	$num_rows=mysql_num_rows($query_run);
	if($num_rows==0)
	{
		
	}
		echo "Source       destination         Time        Fair        BusType         BusCode <br>";
		while($row=mysql_fetch_assoc($query_run))
		{
			?>
			<form action="search_result.php" method ="post">
			<input type='radio' name ='bus_select' value=<?php echo $row['bus_code'];?>><?php echo $row['source']."\t".$row['destination']."\t".$row['time']."\t".$row['fair']."\t".$row['bus_type']."\t".$row['bus_code'].'<br>';?>
		
			
<?php
	}
?>
	<input type="submit" value="proceed" name="proceed">
</form>
	
	<?php
}
else
	echo 'ERROR';

?>

<form action="testfile1.php " Method="POST">
	<input type="submit" value="Back" name="back">
	
	
</form>
