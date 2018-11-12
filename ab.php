<?php
session_start();
require 'connect.php';
$f=0;
if(isset($_POST['register_btn']))
{
		$username=($_POST['username']);

		if (empty($username)&&(empty($_POST['password'])))
		{
			echo"enter all the details";
		}
		else
		{
			$password=md5($_POST['password']);
			$password2=md5($_POST['password2']);
			if(isset($username))
			{
				$qwerty="SELECT * FROM `wallet_portal` where `username` = '".$username."'";

				$q_run=mysql_query($qwerty);
				$get_rows = mysql_num_rows($q_run);
			if($get_rows >=1)
			{
				$f=1;
				?>
				<script = "text/JavaScript">
					alert('Username already exists');
				</script>
				<?php
			}
			else
			{


			if($password==$password2 && $f==0)
			{
				$sql="INSERT INTO wallet_portal(username,password) VALUES('$username','$password')";
				$id="Select * from `wallet_portal` ORDER BY `UID` DESC limit 0,1";
				if(!$qrun=mysql_query($id))
						die();
				$ro=mysql_fetch_assoc($qrun);
				$q2="Insert into `wallet_amt` values('".$username."','".$ro['UID']."',1000)";
				if(($mysql_run=mysql_query($sql)) &&$qw=mysql_query($q2))
				{
					$u1=$ro['UID']+1;
					?>
					<script = "text/JavaScript">
					var x=<?php echo $u1;?>;
 var y='Congrats  \n Rupees 1000 credited to your wallet \n Your Unique Id is ';
					alert(y.concat(x));
					</script>
					<?php

				}
			}
			else
			{
				?>
				<script = "text/JavaScript">
					alert('Passwords do not match');
				</script>
				<?php
			}
		}
	}
}}
?>


<!DOCTYPE html>
<html>
  <title>Wallet Register</title>
<head>
<style>


  body{
      background-image: url("image2.jpg");
      }


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


							    .signin {
							      z-index: 1;
							      background: #FFFFFF;
							      width: 360px;
							      margin: 0 auto 100px;
							      padding: 50px;
							      text-align: center;
							      opacity: 0.9;
							      overflow: auto;
							      margin-top: 10%;
							      margin-left: 640px;
							      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
							    }
							    .signin select {
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
							    .signin select {
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

							    .signin input.what {
							      font-family: "Roboto", sans-serif;
							      text-transform: uppercase;
							      outline: 0;
							      background: #5C6BC0;
							      width: 100%;
							      border: 0;
							      padding: 15px;
							      color: #FFFFFF;
							      font-size: 14px;

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
		        <a href="cancel.php">Cancel Ticket</a>
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
		      </div>
		    </li>
		  </ul>

		</div>
		</div>
		</div>

<?php
    if(isset($msg))
    {
         echo "<div id='error_msg'>".$msg."</div>";
         unset($_msg);
    }
?>
<form method="post" class="signin" action="ab.php">
           <input type="text" name="username" placeholder="username" class="textInput" required="required"><br>

           <input type="password" name="password" placeholder="password" class="textInput" required="required"><br>


           Password again:
           <input type="password" name="password2" placeholder="verify Password"class="textInput" required="required"><br>
                <input type="submit" class="what" name="register_btn" class="Register">
     </form>
</body>
</html>
