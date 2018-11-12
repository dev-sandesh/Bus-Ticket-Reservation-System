
<?php
	session_start();
?>
<html>

<head>

<style>
html, body {
margin:0;

padding:0;
}

body
{
  background-image: url("image2.jpg");
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}

body a{
  transition: 0.1s all;
	-webkit-transition: 0.1s all;
  font-family: 'Open Sans', sans-serif;
  background-color: #D3D3D3;
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
    font-size: 1.3rem;
    max-width: auto;
    background:transparent;
   color: #D3D3D3;
}

li a:hover {
    background-color: #fff;

}

.container
{   display: block;
    padding: 1px 10px 1px 0px ;
    height: auto;
    max-width: auto;
    font-family: "consolas";
    background: transparent;
}

.innernav
{
  display: block;
  margin-left: 0px;
  padding: 15px 50px 0 20px;
  background: #000;
  height: 70px;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width:140px;
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


 table {
   width: 85%;
    font-size: 130%;
   height: 90px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
	 overflow: scroll;
 }

 th {
   background-color: black;
   height: 54px;
   width: auto;
   font-weight: lighter;
   text-shadow: 0 1px 0 #38678f;
   color: white;
   border: 1px solid #38678f;
   box-shadow: inset 0px 1px 2px #568ebd;
   transition: all 0.2s;
  font-family: "consolas";

 }
 tr {
   border-bottom: 1px solid #cccccc;
 }





.unibody
{
	float: left;
	margin-top: 90px;
	background: #FFFFFF;
	margin-left: 180px;
	height: 600px;
	width: 80%;
	text-align: center;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	border-radius: 0.5em;
	 opacity: 0.9;
	 overflow: scroll;

}

<?php
	require 'connect.php';
	$arr=array('username'=>array(),'dtransaction'=>array(),'via'=>array(),'debit'=>array(),'credit'=>array(),'balance'=>array());
	$query="SELECT * FROM `transactions` Where `username` = '".$_SESSION['username1']."'";
	$i=0;
	if($q_run=mysql_query($query))
	{
		while($row = mysql_fetch_assoc($q_run))
		{
			$arr['username'][$i]=$row['username'];
			$arr['dtransaction'][$i]=$row['dtransaction'];
			$arr['via'][$i]=$row['via'];
			$arr['debit'][$i]=$row['debit'];
			$arr['credit'][$i]=$row['credit'];
			$arr['balance'][$i++]=$row['balance'];
		}
	}
	else
		echo 'error';
?>

</style>
</head>



<body>
	<div class="outernav">
  <div class="innernav">
  <div class="container">

    <ul>
      <li><a href="testfile1.php">Home</a></li>
			<li ><a href="about.php">About us</a></li>
      <li style="float:right"><a href="contact.php">Contact</a></li>
      <li class="dropdown" margin-left="100px" style="float:right"><a href"#">User</a>
        <div class="dropdown-content">
          <a href="cancel.php">cancel</a>
          <a href="user_bookings.php">Booking</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Log Out</a>
      </li>
    </ul>

  </div>
  </div>
  </div>
<div class="unibody" overflow="auto">



<?php
	echo "<h1> your wallet balance is ".$arr['balance'][--$i]."</h1>";
	$i++;
	?>
<table overflow="auto">
<tr>
<th> username</th>
<th> dtransaction</th>
<th>via</th>
<th> debit </th>
<th> credit </th>
<th> balance </th>
</tr>
	<?php
	$j=0;
		while($j<$i)
		{
			?>
			<tr>
				<td><?php echo $arr['username'][$j];?></td>
				<td><?php echo $arr['dtransaction'][$j];?></td>
				<td><?php echo $arr['via'][$j];?></td>
				<td><?php echo $arr['debit'][$j];?></td>
				<td><?php echo $arr['credit'][$j];?></td>
				<td><?php echo $arr['balance'][$j++];?></td>
			</tr>

			<?php
		}

	?>

</table>
</div>

</body>
</html>
