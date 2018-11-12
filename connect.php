<?php
	$host='localhost';
	$root='root';
	$pass='';
	$mysqldb='bus';
	if(!(@mysql_connect($host,$root,$pass)))
	{
		die();
		
	}
	else
	{
		if(!(@mysql_select_db($mysqldb)))
			die();
	}
?>