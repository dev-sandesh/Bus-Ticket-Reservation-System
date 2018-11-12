<?php
require 'connect.php';
$city=array();
$i=0;
$querry="SELECT distinct `source` from `city`";
if($qury_run=mysql_query($querry))
{
	while($row=mysql_fetch_assoc($qury_run))
		$city[$i++]=$row['source'];
}
else
	echo 'error';
?>
