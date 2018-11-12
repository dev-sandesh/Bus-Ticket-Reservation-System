<?php session_start();
$_session['set']=0;

include 'req_login.php';
if(isset($_POST['source'])&&isset($_POST['destination'])&&isset($_POST['time']))
{
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$time=$_POST['time'];
	if(!empty($source)&&!empty($destination)&&!empty($time))
	{
		 $_SESSION['source']=$source;
		 $_SESSION['destination']=$destination;
		$_SESSION['date']=$time;
		header('Location:test_search.php');
	}
	else
		echo 'Please fill in all the fields';
}
if(isset($_SESSION['not_found']))
{
	if($_SESSION['not_found']==1)
	{
		?>
		<script = "text/JavaScript">
			alert('Sorry we dont have any bus on this route yet');
		</script>
		<?php
		$_SESSION['not_found']=0;
	}
}

?>

<!DOCTYPE html>
<html>
<head>

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
    width: 2000px;
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
.slider_container
{
overflow: hidden;
display: inline-block;
height: 370px;

}
.slider_container, .booking_container {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.slider_container
{
  z-index: -1;
}

.booking_container
{
margin-top: 0px;
}

.box
{

  max-width: auto;
  max-height: 400px;
  height: 400px;

  overflow: hidden;
  position: relative;

}

.book
{
margin-top: 8%;
margin-left: 23%;
position: relative;
}


.stylebox {
    display: flex;
    position: relative;
    border: 10px solid #ccc;
    margin-top: 120px;
    margin-left: 50px;
    width: 800px;
    border-radius: 3px;
    overflow: auto;
    background: #fafafa  no-repeat 90% 50%;
    opacity: 0.9;
}

.stylebox select {
    padding: 5px 8px;
    width: 80%;
    border: none;
    box-shadow:  1px 1px 1px #888888;
    background: transparent;
}

.stylebox input.dt
{
    padding: 5px 8px;
    width: 70%;
    border: none;
    background: transparent;
}

.stylebox input.sub {
    padding: 5px 8px;
    width: 70%;
    border: none;
    box-shadow:  1px 1px 1px #888888;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.stylebox select:focus {
    outline: none;
}
.bodyimg1
{
  max-height: 300px;
  height: 250px;
  overflow: auto;
  margin-top: 0px;
  background-color:white;
  z-index: -1;

}


.plan-container {
    display: inline-flex;
    width: 400px;
    height: 160px;
    margin: 40px auto;
    margin-left: 120px;
    margin-right: 0px;
    border-radius: 5px;
    background-color: #227a71;
    position: relative;
    top: 0;
    -webkit-transition: all 0.2s;
    transition:;
  }


  .plan-container:hover {
    cursor: pointer;
    position: relative;
    top: -10px;
    -webkit-transition: top 0.2s;
    transition:;
  }


.plan-header {
    overflow: hidden;
    margin: 10px auto;
    height: 150px;
  }


  .plan-container .plan-header h2 {
    background-color: #f4f4f4;
    margin: 2em 0;
    padding: 1.25em;
    font-size: 1em;
    width: 360px;
    line-height: 1.7;
    font-family: "Consolas";
    color: #777777;
  }

.about
  {

    max-width: auto;
    margin-top: 20px;
    max-height: 600px;
    height: 600px;
    background: 	#000000;
    overflow: hidden;
    position: relative;

  }

.describe1
{
    font-family: "consolas";
    color: white;
    font-size: 3em;
    background: transparent;
    width: auto;
    height: 200px;
    margin-top:30px;
    -webkit-transition: all 4s;
    transition: all 4s;
}

.describe1:hover {
  cursor: pointer;
  position: relative;
  top: -5px;
  -webkit-transition: top 4s;
  transition: top 4s;
}

.describe1 p {
  background: transparent;
  margin-left: 300px;
  font-size: 0.5em;
  font-family: "consolas";
  color: #777777;
}

.lastbox
{
background-color: steelblue;
margin-top: 0px;

}

</style>
</head>

<body>
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
        <a href="cancel.php">Cancel Tickets</a>
        <a href="Transaction.php">My Transactions</a>
        <a href="user_bookings.php">My Bookings</a>
				<a href="ab.php">Create Wallet</a>
  		  <a href="logout.php">Log out</a>
      <?php
        }
        else {
        ?>

        <a href="login.php">Login</a>
				<a href="ab.php">Create Wallet</a>
        <a href="register.php">register</a>
				<a href="file1.php">Employee Login</a>

      <?php
        }
        ?>
      <div>
    </li>
  </ul>

</div>
</div>
</div>

<div class="box">


<div class="booking-container">
<div class="book">
  <form class="stylebox" action="testfile1.php" Method="POST" onSubmit="return submit1();">

<!--Source -->
  <select name="source" id="source">

    <option value=""> Source </option>
    <?php
    	foreach($city as $r=>$city1)
    	{
    ?>
    <option value="<?php echo $city1;?>"><?php echo $city1?></option>
    <?php
    }
    ?>
    </select>

<!-- destination -->
    <select name="destination" id="destination">
      <option selected value=""> Destination </option>
    <?php
    	foreach($city as $r=>$city1)
    	{
    ?>
    	<option value="<?php echo $city1;?>"><?php echo $city1?></option>
    	<?php
    	}
    	?>
    </select>
<!--date-->


	<input class="dt" type="date" name="time" required="required" id="date_of_journey" >
	<input class="sub" type="submit" value="Search" name="search">

  <script = "text/JavaScript">
        var input = document.getElementById("date_of_journey");
        var today = new Date();
        var day = today.getDate();

        // Set month to string to add leading 0
        var mon = new String(today.getMonth()+1); //January is 0!
        var yr = today.getFullYear();
  	  day++;

          if(mon.length < 2) { mon = "0" + mon; }
          if(day < 10) { day = "0" + day; }
          var date = new String( yr + '-' + mon + '-' + day );
        input.disabled = false;

        input.setAttribute("min", date);
  	  function submit1()
  	  {
  		  var source=document.getElementById("source").value;
  		  var destination=document.getElementById("destination").value;

  		  if(source==""||destination=="")
  		  {
  			  alert('choose source and destination');
  			  return false;
  		  }
  		  else if(source == destination)
  		  {
  			  alert('source  and destination must be different');
  			  return false;
  		  }
  			  return true;
  	  }
  </script>

</form>
</div>
</div>

  <div class="slider_container">

        <div height="auto" class="slide">
           <img src="image1.jpg" class="img-responsive" alt=""/>
        </div>
    <div class="slide">
       <img src="image2.jpg" class="img-responsive" alt=""/>
    </div>
     <div class="slide">
        <img src="image4.jpg" class="img-responsive" alt=""/>
     </div>
     <div class="slide">
        <img src="image5.jpg" class="img-responsive" alt=""/>
     </div>
 </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";

    setTimeout(carousel, 2000);

  // Change image every 2 seconds
}
</script>

</div>

<div class="bodyimg1">

  <div class="divbox">
  <div class="plan-container">
  <div class="plan-header">
      <div class="icon-box"><i class="fa fa-users icon"></i></div>
      <h2>Get Rs. 1000 Credit on First Registration.</h2>
      </div>
  </div>
  <div class="plan-container">
  <div class="plan-header">
      <div class="icon-box"><i class="fa fa-users icon"></i></div>
      <h2>Instant Refund.<br></h2>
      </div>
  </div>
  <div class="plan-container">
  <div class="plan-header">
      <div class="icon-box"><i class="fa fa-users icon"></i></div>
      <h2>Complimentary Onboard Meals</h2>
      </div>
  </div>
  </div>
</div>

<div class="about">
<div class="describe1">
<div class="describe">
  <h3 align="center">What  We do</h3>
  <p margin-left="40px" align="left">BookmyBus provides bus travellers,the most uncomplicated and hassle-free booking experience ever.</p>
  <p margin-left="40px" align="left">Choose your destination,view the seat layout,choose convenients seats,and book your ticket in just a few clicks! </p>
  <p margin-left="40px" align="left">The BookmyBus experience does not ebd with the booking.</p>
  <p margin-left="40px" align="left">In a series of industry leading features,BookmyBus offers uncompromised user experience and hassle free booking.</p>
</div>
</div>
</div>

</body>
</html>
