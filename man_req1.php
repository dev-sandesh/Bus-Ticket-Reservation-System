<?php
 session_start();
$_SESSION['page']=$_SERVER['SCRIPT_NAME'];
if(isset($_SESSION['failed'])&&($_SESSION['failed']==1))
{
	?>
	<Script = "text/JavaScript">
		alert('Username and Password combination do not match');
	</Script>
	<?php
	$_SESSION['failed']=0;
}
?>
