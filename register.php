<!DOCTYPE html>
<html>
  <title>Register</title>
<head>
</head>
<body>

<?php

session_start();
require 'connect.php';
$user_name=array();
$q=0;
$query1="SELECT `username` from `login`";
if($query_run1=mysql_query($query1))
{
	while($row=mysql_fetch_assoc($query_run1))
		$user_name[$q++]=$row['username'];

if(isset($_POST['name'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['gender']))
{
	$name=$_POST['name'];
    $username=($_POST['username']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    $password2=($_POST['password2']);
	$gender=($_POST['gender']);
	if(!empty($name)&&!empty($username)&&!empty($email)&&!empty($password)&&!empty($password2)&&!empty($gender))
	{
     if($password==$password2)
     {
			$password_hash=md5($password);
            $sql="INSERT INTO `users` values('".$name."','".$username."','".$email."','".$password_hash."','".$gender."');";
			//$query="INSERT INTO `login` values('".$username."','".$password_hash."');";

           if(($mysq_run=mysql_query($sql))/*&&($Query_run=mysql_query($query))*/)
		   {
            $_SESSION['register_success']=1;
			header('Location:login.php');
			//exit();
		   }
		   else
			{
				?>
<script = "text/JavaScript">
alert('Username Already Exists. Select a unique username');
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
}
else
	echo 'Error';
?>
<!--
<form method="post" action="register.php" onSubmit="return validation()">
  <table>
	<tr>
           <td>Name : </td>
           <td><input type="text" name="name" class="textInput" required = "required" placeholder="Name" value=""></td>
     </tr>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" id='username' class="textInput" required = "required" placeholder="Username" value=""></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput" required = "required" placeholder="email" value=""></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"required = "required" placeholder="password" value=""></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput" required = "required" placeholder="password" value=""></td>
     </tr>
	 <tr>
	 <td>
		Gender</td>
		<td>
		<input type="radio" name="gender" value="male" required = "required" checked="true">male
		<input type="radio" name="gender" value="female" required = "required">female
</td>
</tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" value="register"></td>
     </tr>

</table>
</form>
-->

<!DOCTYPE html>
<html>
<head>
  <title> 101 </title>
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style type="text/css">

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

  body{
      background-image: url("image2.jpg");
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
      margin-top: 8%;
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
      <li><a href="about.php">About Us</a></li>
      <li style="float:right"><a href="ab.php">Create Wallet</a></li>

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
<form class="signin" action="register.php" method = "POST">
	<input type="text" name="name" class="textInput" required = "required" placeholder="Name" value="">
	<input type="text" name="username" id='username' class="textInput" required = "required" placeholder="Username" value="">
  <input type="email" name="email" class="textInput" required = "required" placeholder="Email" value="">
  <input type="password" name="password" class="textInput"required = "required" placeholder="Password" value="">
  <input type="password" name="password2" class="textInput" required = "required" placeholder="Enter Password Again" value="">

    <select name="gender">
      <option value="MALE">MALE</option>
      <option value="FEMALE">FEMALE</option>
  </select>
<!--
<input type="radio" name="gender" value="male" required = "required" checked="true">
  <input type="radio" name="gender" value="female" required = "required">
-->
<input class="what" type="submit" name="register_btn" value="register"> </button>
</form>
</div>


<script ="text/JavaScript">
function validation()
{
	var username=document.getElementById('username').value;
	var user_exist=<?php echo json_encode($user_name)?>;
	var q=<?php echo $q;?>;
	for (var x=0;x<q;x++)
	{
		if (username.toLowerCase()==user_exist[x].toLowerCase())
		{
			alert("Username Already Exist.  Enter a unique username");
			return false;
		}

	}
}

</script>
</body>
</html>
