<?php
session_start();
$x='location:'.$_SESSION['page'];

if(isset($_SESSION['muser']))
{
	if(($_SESSION['page']=="/project1/route_search.php")||($_SESSION['page']=="/project1/result.php")||($_SESSION['page']=="/project1/file7.php")||($_SESSION['page']=="/project1/modify3.php")||($_SESSION['page']=="/project1/modify2.php")||($_SESSION['page']=="/project1/del_bus.php")||($_SESSION['page']=="/project1/report1.php"))
	{
		session_unset($_SESSION['muser']);
		header('location:file3.php');
	}
	else {
				session_unset($_SESSION['muser']);
				header($x);
	}
}
else
{
	session_destroy();
	header('location:file1.php');
}
?>
