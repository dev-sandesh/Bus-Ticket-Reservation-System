<?php
session_start();

	$t=0;
	$count=0;
	if(isset($_POST['name'])&&isset($_POST['age'])&&isset($_POST['gender']))
	{
		if(!empty($_POST['name'])&&!empty($_POST['age'])&&!empty($_POST['gender']))
		{
			foreach($_POST['name'] as $name)
				$pass_name[$t++]=$name;
				$t=0;
			foreach($_POST['age'] as $name)
				$pass_age[$t++]=$name;
				$t=0;
			foreach($_POST['gender'] as $name)
				$pass_gender[$t++]=$name;

			$_SESSION['pass_name']=$pass_name;
			$_SESSION['pass_age']=$pass_age;
			$_SESSION['pass_gender']=$pass_gender;
			header('Location:payment.php');
		}
	}

	foreach($_SESSION['seat_select'] as $key=>$value)
		$count++;
	$i=1;

?>

<!DOCTYPE html>
<html>
<head>
  <title> 101 </title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style type="text/css">

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
h3{
text-align: center;
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
										list-style-type: none;
							      margin-top: 5%;
							      margin-left: 30%;
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
	    <li><a href="about.php">About Us</a></li>
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








<div class="unibody">
<form class="signin" action="pas_details.php" method="post" name="pass_details">

	<li>
<?php
while($i<=$count)
		{
			echo " <br/><br/><h3>Passenger $i </h3><br/><br/>";
			$i++;
?>
</li>

  <input type="text" name="name[]" placeholder="Passenger Full Name" required="required" /></td>
	<input type="text" name="age[]" placeholder="Age" required="required" /></td>


     <select name="gender[]" placeholder="Gender">
       <option value="M">MALE</option>
       <option value="F">FEMALE</option>
   </select>

<?php
	}
	?>
	<input class="what" type ="submit" name ="proceed" value="Payment Proceed"/>
</form>
</body>
