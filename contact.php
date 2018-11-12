<!doctype html>
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


.bodyimg1
{

  height: 500px;
  overflow: auto;
  margin-top: 0px;
  background: transparent;
  z-index: -1;

}


.plan-container {
    display: inline-block;
    width: 400px;
    height: 350px;
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
    height: 400px;
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
h1 {
    font-weight: bold;
    font-size: 40px;
    text-align: center;
    font-family: "Consolas";
    color: #777777 ;
  }
  h2{
    text-align: center;
  }

p {
    text-indent: 50px;
    text-align: center;
    letter-spacing: 1px;
	font-size: 17px;
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
	<li style="float:right"><a href="about.php">About Us</a></li>
    </li>
  </ul>

</div>
</div>
</div>

  <h1 text-align="center" >Contact Us<br><br></h1>
  <div class="bodyimg12">
	<div class="divbox">



		<div class="plan-container">
		<div class="plan-header">

			<h2>Bengaluru</h2>
			<h2>Address:-Bus Station Underpass, Majestic, Bengaluru, Karnataka 560009<br>
			Phone no:- +91-8808591203</h2>
	  </div>
	  </div>
  <div class="plan-container">
  <div class="plan-header">
      <div class="icon-box"><i class="fa fa-users icon"></i></div>
    <h2>Chennai</h2>
    <h2>Address: Shop No.14/27, Kuppu Muthu Street, Triplicane, Chennai 600005<br>
	Phone no:- +91-9148714244</h2>
  </div>
  </div>
  <div class="plan-container">
  <div class="plan-header">
      <div class="icon-box"><i class="fa fa-users icon"></i></div>
	  <h2>Vellore</h2>
    <h2>Address:-NO.13 O.A.R Complex Near Housing Board Down Vellore<br>
		Phone no:- +91-9742644780</h2>
  </div>
  </div>
</div>
</div>
	  </body>
</html>
