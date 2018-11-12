<!DOCTYPE html>
<html>
<head>

</head>
<style>

body{
    background-image: url("1600.jpg");
    }

    ul.a{
      list-style-type: none;
      margin-top: 10;
      padding: 10;
      margin-left: 0px;
      overflow: hidden;
      background: linear-gradient(#141E30,#243B55 );
      border-radius: 5px;
      opacity: 0.9;
      width: 1200px;
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
      background: linear-gradient(#141E30,#243B55 );
      border-top-right-radius:  1em;
      border-bottom-right-radius: 1em;


  }

 .b li a{
      float: left;
      position: relative;
      color: #edf3ff;
      padding: 15px 16px;
      text-decoration: none;
      font-size: 16px;
      font-family: "Open Sans", arial;
 }


</style>
</head>


<body>

  <ul class="a">
      <li><a href="home">HOME</a></li>
      <li style="float:right"><a href="Log Out">LOGOUT</a><li>
      <li style="float:right"><a href="about">ABOUT</a></li>
      <li><a href="help">HELP</a></li>
  </ul>


<div class="inline">
  <div class="nav">
  <ul class="b">

    <li style="float:left"><a href="file3.php">View All Users</a></li>
    <li style="float:left"><a href="file4.php">Search specific User</a></li>
    <li style="float:left"><a href="#">View all Bus</a></li>
    <li style="float:left"><a href="#">Search Specific Bus</a></li>
	  <li style="float:left"><a href="file5-test101.php">Add Bus</a></li>
    <li style="float:left"><a href="#">Modify Bus Details</a></li>
    <li style="float:left" ali><a href="#">Delete Specific Bus</a></li>
	  <li style="float:left"><a href="#">Add stops</a></li>
	  <li style="float:left"><a href="file8.php">Reports</a></li>


  </div>

</body>
</html>
