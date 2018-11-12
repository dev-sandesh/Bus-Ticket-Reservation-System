<?php
session_start();
$_SESSION['failed']=0;
	if(isset($_POST['user'])&&isset($_POST['password']))
	{
		$muser=$_POST['user'];
		$pass=$_POST['password'];
		if(!empty($muser)&&!empty($pass))
		{
			if($muser=='shubham'&&$pass=='shubham')
			{
				$_SESSION['muser']=1;

			}
			else
			{
				$_SESSION['failed']=1;


			}
			$p=$_SESSION['page'];
			header('location:'.$p);
		}
	}

?>
