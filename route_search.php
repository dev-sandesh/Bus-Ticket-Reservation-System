<?php require 'man_req1.php';?>
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
   background: #FFFFFF;
   margin-left: 80px;
   height: 500px;
   padding: 50px;
   width: 1000dpi;
   max-height: 650px;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;
    opacity: 0.9;


 }

 table {
   width: 100%;
    font-size: 130%;
   max-width: 1000px;
   height: 320px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }
 th {
   background: steelblue;
   height: 60px;
   width: 10%;
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
td{
	text-align:center;
}

 #inline
 {
     text-align:center;
 }
 #nav, #unibody
 {
     display:inline-block;
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
  <div id="myModal" class="modal" >

    <!-- Modal content -->
    <div class="modal-content " >

      <span class="close">&times;</span>
  	<h1>MANAGER LOGIN</h1>
      <div>
    <form action="Authenticate.php" method="POST">
      <label for="username">MANAGER USERNAME</label></br>
      <input type="text" id="username" name="user" placeholder="username.." required="required"></br>

      <label for="password">password</label></br>
      <input type="password" id="password" name="password" placeholder="password.." required="required"></br>


      <input type="submit" value="LOGIN">
    </form>
  </div>
    </div>

  </div>
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
    <li style="float:left"><a href="file6.php">View all Bus</a></li>
    <li style="float:left"><a href="file6.php">Search Specific Bus</a></li>
    <li style="float:left"><a href="recharge.php">Recharge Wallet</a></li>
    <li style="float:left"><a href="file7.php">Add Bus</a></li>
    <li style="float:left"><a href="modify2.php">Modify Bus Details</a></li>
    <li style="float:left" ali><a href="del_bus.php">Delete Specific Bus</a></li>
	<li style="float:left"><a href="#">Add stops</a></li>
  <li style="float:left"><a  href="report1.php">Generate Transaction Report</a></li>


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
    <div style="width: 1200px; overflow: auto; height: 500px;" class="unibody">
      <div class="container">
	  <?php
		require 'connect.php';

		$arr=array('source'=>array(),'destination'=>array(),'time'=>array(),'fair'=>array(),'Bus_Type'=>array(),'Bus_Code'=>array(),'Route_No'=>array());
		$i=0;
		foreach( $_SESSION['search_source'] as $n)
			$arr['source'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_destination'] as $n)
			$arr['destination'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_time'] as $n)
			$arr['time'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_fair'] as $n)
			$arr['fair'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_bus_type'] as $n)
			$arr['Bus_Type'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_bus_code'] as $n)
			$arr['Bus_Code'][$i++]=$n;
			$i=0;
		foreach( $_SESSION['search_route_no'] as $n)
			$arr['Route_No'][$i++]=$n;

	  ?>
    <h3>Bus Details</h3>
        <table class="heavyTable">
     <thead>
       <tr>
          <th>SOURCE</th>
         <th>DESTINATION</th>
         <th>TIME</th>
         <th>FAIR</th>
		 <th>BUS TYPE</th>
		 <th>BUS CODE</th>
		 <th>ROUTE NO.</th>
       </tr>
	   </thead>
	   <tbody>
			<?php
			$j=0;
			while ($j<$i)
			{
			?>
			<tr>
				<td><?php echo $arr['source'][$j];?></td><td><?php echo $arr['destination'][$j];?></td><td><?php echo $arr['time'][$j];?></td><td><?php echo $arr['fair'][$j];?></td><td><?php echo $arr['Bus_Type'][$j];?></td><td><?php echo $arr['Bus_Code'][$j];?></td><td><?php echo $arr['Route_No'][$j];?></td>
			</tr>
			<?php
			$j++;
			}
			?>
	   </tbody>

    </div>

</div>

</body>
</html>
