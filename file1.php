<!DOCTYPE html>
<html>
<head>
  <style>
  ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background: linear-gradient(#141E30,#243B55 );
    }

    li a {
      float: left;
        display: flex;
        color: white;
        text-align: center;
        padding: 18px 25px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover
    {
        background-color: #92a8d1;
    }

    .log
    {
      width: 360px;
      padding: 15% 0 0;
      margin: auto;
    }

    .signin {
      padding-bottom: 2
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 50px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .signin input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }
    .signin button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #4CAF50;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;

    }

.hr
{
padding: 200px;
}

body{
    background-image: url("image2.jpg");
    }
}
  </style>
</head>

<body>

<ul>
    <li><a href="testfile1.php">HOME</a></li>

</ul>
<?php
	session_start();
	require 'connect.php';
	if(isset($_POST['eid'])&&isset($_POST['epw']))
	{
		$employee=$_POST['eid'];
		$pass=$_POST['epw'];
		if(!empty($employee)&&!empty($pass))
		{
			$pass_hash=md5($pass);

			$q1="SELECT * from `employee_login` where `eid` = '".$employee."' AND `epw` = '".$pass_hash."'";
			if($q_run=mysql_query($q1))
			{

				if(mysql_num_rows($q_run)==1)
				{
					echo '1';
					$_SESSION['emp_user']=$employee;
					header('Location:file3.php');
				}
				else
				{
					?>
					<script = "text/JavaScript">
						alert('Username password combination does not match');
					</script>
					<?php
				}
			}
		}
	}
?>
<div class="log">
  <form class="signin" method="post" action="file1.php">

      <input type="text" placeholder="Employee ID" name="eid" required="required">
      <input type="password" placeholder="password" name="epw" required="required">
      <button name="Login" type="submit" > Login </button>
</form>
</div>

<div class="hr">
<hr>
</div>
</ul>

</body>
</html>
