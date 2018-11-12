<?php require 'man_req1.php'?>
<html>

<head>

<style>


body{
    background-image: url("1600.jpg");
    }

    ul.a{
      list-style-type: none;
      margin-top: 0;
      padding: 0;
      overflow: hidden;
      background: linear-gradient(#141E30,#243B55 );
      border-radius: 5px;
      opacity: 0.8;

      }

    .a li a{
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 18px 25px;
          text-decoration: none;
          font-size: 110%;
      }
      li a:hover
      {
        background-color: #b4b9c1;
        color: white;
      }

    ul.b
  {   float: left;
      font-size: 110%;
      list-style-type: none;
      margin-left: 10px;
      margin-top: 120px;
      padding: 10px;
      height: 520px;
      width: 200px;
      background: linear-gradient(#141E30,#243B55 );
      border-top-right-radius:  1em;
      border-bottom-right-radius: 1em;
      opacity: 0.9;

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
   background: #FFFFFF; margin-left: 80px;
   height: 650px;
   padding: 50px;
   width: 1000dpi;
   max-height: 500px;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;
   opacity: 0.9;

 }

 table {
   width: 150%;
   max-width: 1000px;
   font-size: 120%;
   height: 150px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }
 th {
   background-color: #034f84;
   height: 54px;
   width: 12%;
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
    background-color: #5C6BC0;
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

  <ul class="a">
      <li><a href="testfile1.php">HOME</a></li>
      <li style="float:right"><a href="mlogout.php">LOGOUT</a><li>
  </ul>


<div class="inline">
  <?php
  if (isset($_SESSION['muser'])&&!empty($_SESSION['muser']))
  {
?>
  <div class="nav">
  <ul class="b">


    <li style="float:left"><a href="file3.php">View All Users</a></li>
    <li style="float:left"><a href="file4.php">Search specific User</a></li>
    <li style="float:left"><a href="file5.php">View all Bus</a></li>
    <li style="float:left"><a href="file6.php">Search Specific Bus</a></li>
      <li style="float:left"><a href="recharge.php">Recharge Wallet</a></li>
    <li style="float:left"><a href="file7.php">Add Bus</a></li>
    <li style="float:left"><a href="modify2.php">Modify Bus Details</a></li>
    <li style="float:left" ali><a href="del_bus.php">Delete Specific Bus</a></li>
	  <li style="float:left"><a href="#">Add stops</a></li>
    <li style="float:left"><a  href="report1.php"">Generate Transaction Report</a></li>


  </ul>

  </div>
  <?php
		}
		else{
		?>
		 <div class="nav">
	  <ul class="b">

	    <li style="float:left"><a href="file3.php">View All Users</a></li>
	    <li style="float:left"><a href="file4.php">Search specific User</a></li>
	    <li style="float:left"><a href="file5.php">View all Bus</a></li>
	    <li style="float:left"><a href="file6.php">Search Specific Bus</a></li>
      <li style="float:left"><a href="recharge.php">Recharge Wallet</a></li>
    <li style="float:left"><a ID="myBtn1" href="#?id=1">Add Bus</a></li>
	    <li style="float:left"><a ID="myBtn2" href="#?id=2">Modify Bus Details</a></li>
	    <li style="float:left" ><a ID="myBtn3" href="#?id=3">Delete Specific Bus</a></li>
		<li style="float:left"><a ID="myBtn4" href="#?id=4">Add stops</a></li>
    <li style="float:left"><a ID="myBtn5" href="#?id=5">Generate Transaction Report</a></li>

  </ul>

	</div>
	<script ="text/JavaScript">
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn1 = document.getElementById("myBtn1");
  var btn2 = document.getElementById("myBtn2");
  var btn3 = document.getElementById("myBtn3");
  var btn4 = document.getElementById("myBtn4");
  var btn5 = document.getElementById("myBtn5");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal
  btn1.onclick = function() {

      modal.style.display = "block";
  }
  btn2.onclick = function() {

      modal.style.display = "block";
  }
  btn3.onclick = function() {

      modal.style.display = "block";
  }
  btn4.onclick = function() {

      modal.style.display = "block";
  }
  btn5.onclick = function() {

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
	</div>
		<?php
			}
		?>
    <div style="width: 1100px; overflow: auto; height: 650px;" class="unibody" >
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

    </div>

    <h3>USER BOOKINGS</h3>
    <?php
    require 'connect.php';
    $quer1="select * from `bookings` where `username`='".$username."'";
    if($q1=mysql_query($quer1))
    {
      if(mysql_num_rows($q1)>0)
      {
    ?>
    <table>
    <thead>
    <tr>
    <th>Journey Date</th>
    <th>Booking Date</th>
    <th>Username</th>
    <th>Seat No</th>
    <th>Bus Code</th>
    <th>Status</th>
    <th>Passenger Name</th>
    <th>Age</th>
    <th>Sex</th>
    </tr>
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
  else {
    {
      echo 'No Bookings';
    }
  }
    }

    ?>
    </tbody>
    </table>
</div>

</body>
</html>
