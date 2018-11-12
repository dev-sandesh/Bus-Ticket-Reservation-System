<?php
	require 'connect.php';
	ob_start();
	session_start();
	$username='';
	$pass='';
	if(isset($_SESSION['register_success']))
	{
		if($_SESSION['register_success']==1)
		{
			?>
			<script = "text/JavaScript">
				alert('Register Sucessful');
			</script>
			<?php
			$_SESSION['register_success']=0;
		}
	}





	if(isset($_SESSION['redirect']))
	{
		if($_SESSION['redirect']==1)
		{
			?>
			<script = "text/JavaScript">
				alert('Login to proceed');
			</script>
			<?php
			$_SESSION['redirect']=0;
		}
	}





	if(isset($_POST['user'])&&isset($_POST['password']))
	{
		$username=strtolower($_POST['user']);
		$pass=strtolower($_POST['password']);
		if(!empty($username)&&!empty($pass))
		{
			$pass_hash=md5($pass);
			$query = "SELECT `username`,`password` FROM `login` WHERE `username` = '".$username."' AND `password` = '".$pass_hash."'";
			if($query_run=mysql_query($query))
			{
				if(mysql_num_rows($query_run)==1)
				{

					$_SESSION['username1']=$username;
					if(isset($_SESSION['set']))
					{
						if($_SESSION['set']=='1')
							header('location:booking.php');
					}
					else
						header('location:testfile1.php');
				}
				else
				{
					?>
					<script = "text/JavaScript">
						alert("Username and Password combination do not match")
					</script>
					<?php
				}
			}
			else
				echo 'ERROR';
		}
        else
			?>
		<script = "text/JavaScript">
		alert('please enter username and password');
		</script>
			<?php
	}
?>
<!DOCTYPE html>
<html>
<head>
  <style>


	html, body {
	margin:0;

	padding:0;
	}
	body a{
	  transition: 0.1s all;
		-webkit-transition: 0.1s all;
	  font-family: 'Open Sans', sans-serif;
	}


	ul {
	    list-style-type: none;
	    margin-top: 10px;
	    padding: 0;
	    overflow: auto;
	    background: transparent;
	    color: #D3D3D3;
	}


	li {
	    float: left;

	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 10px 15px;
	    text-decoration: none;
	    font-size: 15px;
	    font: verdana;
	    max-width: auto;
	color: #D3D3D3;
	}

	li a:hover {
	    background-color: #fff;

	}


	.container
	{   display: block;
	    padding: 1px 40px 1px 0px ;
	    height: auto;
	    max-width: auto;
	    background: transparent;
	}

	.innernav
	{
	  display: block;
	  margin-left: 0px;
	  padding: 15px 30px 0 10px;
	  background-color: #000;
	  height: 70px;
	}

	li.dropdown {
	    display: inline-block;
	}

	.dropdown-content {
	    display: none;
	    position: absolute;
	    background-color: #f9f9f9;
	    width: 120px;
	    box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.2);
	    z-index: 1;
	}

	.dropdown-content a {
	    color: black;
	    padding: 12px 16px;
	    text-decoration: none;
	    display: block;
	    text-align: left;
	}

	.dropdown-content a:hover
	{background-color: #f1f1f1}

	.dropdown:hover .dropdown-content
	{
	    display: block;
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


body{
    background-image: url("image2.jpg");
    }
}
  </style>
</head>

<body>




	<div class="outernav">
	<div class="innernav">
	<div class="container">

	  <ul>
	    <li><a href="testfile1.php">Home</a></li>
	    <li style="float:right"><a href="contact.php">Contact</a></li>
	    <li><a href="about.php">About US</a></li>
	    <li class="dropdown" style="float:right"><a href"#">User</a>
	      <div class="dropdown-content">
	        <?php if(isset($_SESSION['username1']))
	        {
	        ?>
	        <a href="cancel.php">Login</a>
	        <a href="Transaction.php">My Transactions</a>
	        <a href="user_bookings.php">My Bookings</a>
	        <a href="logout.php">Log out</a>
	      <?php
	        }
	        else {
	        ?>
	        <a href="login.php">Login</a>
	        <a href="register.php">register</a>
	      <?php
	        }
	        ?>
	      <div>
	    </li>
	  </ul>

	</div>
	</div>
	</div>

<div class="log">
<form class="signin" action="login.php" method = "POST">
	<input type="text" name="user" placeholder="Username"/>
	<input type="password" name="password" placeholder = "password"/>
	<button name="Login" type="submit" > Login </button>
</form>
</div>


</body>
</html>
