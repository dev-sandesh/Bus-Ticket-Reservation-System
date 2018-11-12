<?php
	session_start();
	require 'connect.php';

	$arr=array('username'=>array(),'dtransaction'=>array(),'via'=>array(),'debit'=>array(),'credit'=>array(),'balance'=>array());
	$query="SELECT * FROM `transactions` Where `username` = '".$_SESSION['username1']."'";
	$i=0;
	if($q_run=mysql_query($query))
	{
		while($row = mysql_fetch_assoc($q_run))
		{
			$arr['username'][$i]=$row['username'];
			$arr['dtransaction'][$i]=$row['dtransaction'];
			$arr['via'][$i]=$row['via'];
			$arr['debit'][$i]=$row['debit'];
			$arr['credit'][$i]=$row['credit'];
			$arr['balance'][$i++]=$row['balance'];
		}
	}
	else
		echo 'error';
?>
<html>
<head>
</head>
<title> wallet Transaction details</title>
<body>
<?php
	echo "<h1> your wallet balance is ".$arr['balance'][--$i]."</h1>";
	$i++;
	?>
<table>
<tr>
<th> username</th>
<th> dtransaction</th>
<th>via</th>
<th> debit </th>
<th> credit </th>
<th> balance </th>
</tr>
	<?php
	$j=0;
		while($j<$i)
		{
			?>
			<tr>
				<td><?php echo $arr['username'][$j];?></td>
				<td><?php echo $arr['dtransaction'][$j];?></td>
				<td><?php echo $arr['via'][$j];?></td>
				<td><?php echo $arr['debit'][$j];?></td>
				<td><?php echo $arr['credit'][$j];?></td>
				<td><?php echo $arr['balance'][$j++];?></td>
			</tr>

			<?php
		}

	?>

</table>

</body>
</html>
