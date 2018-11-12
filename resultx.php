<?php session_start();?>
<html>

<head>

<style>

body{
    background-image: url("image2.jpg");
    }

    ul.a{
      list-style-type: none;
      margin-top: 0;
      padding: 0;
      overflow: hidden;
      background: linear-gradient(#a1afc6,#bec7d8 );
      border-radius: 5px;
      opacity: 0.9;
      }

    .a li a{
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 18px 25px;
          text-decoration: none;
      }
      li a:hover
      {
        background-color: #b4b9c1;
        color: white;
      }

    ul.b
  {   float: left;
      list-style-type: none;
      margin-left: 10px;
      margin-top: 120px;
      padding: 10px;
      height: 490px;
      width: 200px;
      background-image: url("image12.jpg");
      border-top-right-radius:  1em;
      border-bottom-right-radius: 1em;


  }

 .b li a{
      float:right;
      position: relative;
      color: #edf3ff;
      padding: 15px 16px;
      text-decoration: none;
      font-size: 16px;
      font-family: "Open Sans", arial;
 }
.unibody
 {
   float: left;
   margin-top: 90px;
   background: #FFFFFF;
   margin-left: 150px;
   height: 650px;
   padding: 50px;
   width: 1000dpi;
   max-height: 650px;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;


 }

 body {
   background: steelblue;
   font-family: "Open Sans", arial;
 }
 table {
   width: 100%;
   max-width: 1000px;
   height: 320px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }
 th {
   background: steelblue;
   height: 54px;
   width: 25%;
   font-weight: lighter;
   text-shadow: 0 1px 0 #38678f;
   color: white;
   border: 1px solid #38678f;
   box-shadow: inset 0px 1px 2px #568ebd;
   transition: all 0.2s;
 }
 tr {
   border-bottom: 1px solid #cccccc;
 }


 #inline
 {
     text-align:center;
 }
 #nav, #unibody
 {
     display:inline-block;
 }
td{
	text-align:center;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 200px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
input[type=text],[type=password]{
    width: 50%;
    padding: 12px 20px;
   margin-top:8px;
	margin-left: 400px;
	margin-bottom:8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-top:8px;
	margin-left: 400px;
	margin-bottom:8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
}
label{
	margin-top:8px;
	margin-left: 400px;
	margin-bottom:8px;
}
input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>


<body>

 <div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content " >
 
    <span class="close">&times;</span>
	<h1>MANAGER LOGIN</h1>
    <div>
  <form action="/action_page.php">
    <label for="username">MANAGER USERNAME</label></br>
    <input type="text" id="username" name="username" placeholder="username.."></br>

    <label for="password">password</label></br>
    <input type="password" id="password" name="password" placeholder="password.."></br>

  
    <input type="submit" value="LOGIN">
  </form>
</div>
  </div>

</div>

	
  <ul class="a">
      <li><a href="home">HOME</a></li>
      <li style="float:right"><a href="Log Out">LOGOUT</a><li>
      <li style="float:right"><a href="about">ABOUT</a></li>
      <li><a href="help">HELP</a></li>
  </ul>


<div class="inline">
  <div class="nav">
  <ul class="b">

<li style="float:left"><a href="#">Users</li>
    <li style="float:left"><a href="file3.php">View All Users</a></li>
    <li style="float:left"><a href="file4.php">Search specific User</a></li>
    <li style="float:left"><a href="#">Bus Details</a></li>
    <li style="float:left"><a href="viewbusses.php">View all Bus</a></li>
    <li style="float:left"><a href="viewspecificbus.php">Search Specific Bus</a></li>
	<li style="float:left"><a href="file5-test101.php">Add Bus</a></li>
    <li style="float:left"><a href="#">Modify Bus Details</a></li>
    <li style="float:left" ><a ID="myBtn" href="#">Delete Specific Bus</a></li>
	<li style="float:left"><a href="#">Add stops</a></li>


</div>
    <div style="width: 1200px; overflow: auto; height: 650px;" class="unibody">
      <div class="container">
<h3>USER DETAILS</h3>
        <table class="heavyTable">
     <thead>
       <tr>
         <th>NAME</th>
         <th>USERNAME</th>
         <th>EMAIL</th>
         <th>GENDER</th>
       </tr>
	   </thead>
	   <tbody>
	   
			<?php
				
				$name=$_SESSION['search_name'];
				$username=$_SESSION['search_username'];
				$email=$_SESSION['search_email'];
				$gender=$_SESSION['search_gender'];
			?>
			<tr>
				<td><?php echo $name;?></td><td><?php echo $username;?></td><td><?php echo $email;?></td><td><?php echo $gender;?></td>
			</tr>
	   </tbody>
	   </table>
	<h3>USER BOOKINGS</h3>
	<?php
	require 'connect.php';
	$quer1="select * from `bookings` where `username`='".$username."'";
	if($q1=mysql_query($quer1))
	{
		?>
		<table>
		<thead>
		<th>Journey Date</th>
		<th>Booking Date</th>
		<th>Username</th>
		<th>Seat No</th>
		<th>Bus Code</th>
		<th>Status</th>
		<th>Passenger Name</th>
		<th>Age</th>
		<th>Sex</th>
		</thead>
		<tbody>
		<?php
		$i=0;
		while($row=mysql_fetch_assoc($q1))
		{
			?>
			<tr>
			<td><?php echo $row['journey_date'];?></td>
			<td><?php echo $row['booking_date'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['seat'];?></td>
			<td><?php echo $row['bus_code'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['pass_name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['gender'];?></td>
			</tr>
			<?php
		}
	}
	
	?>
	</tbody>
	</table>
    </div>

</div>
<script ="text/JavaScript">
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>
