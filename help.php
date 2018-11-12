<?php
if (isset($_POST['SUBMIT'])){
		?>
		<script = "text/JS">
		alert('your form has been saved');
		</script>
		<?php
	}
?>
<html>
<head>
<style>
input[type=text], select {
    width: 500px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 500px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin: 10px;
    padding: 8px;
	height:500px;
	width:700px;
	align:center;
}

h1 {
    text-align: center;
    color: #4CAF50;
	font-size:40px;
	font-weight:bold;
}
h2 {
    text-align: center;
    color: #4CAF50;
	font-size:25px;
	}

p {
    text-indent: 50px;
    text-align: center;
    letter-spacing: 1px;
	font-size: 17px;
}
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
      background: linear-gradient(#141E30,#243B55 );
      border-top-right-radius:  1em;
      border-bottom-right-radius: 1em;


  }

 .b li a{
      float:right;
      position: relative;
      color: #edf3ff;
      padding: 15px 16px;s
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
  <div>
  <h1> Reach Us Out!</h1>
<form method="POST">
<fieldset style="width:500px";>
  First name:<br>
  <input type="text" name="firstname" required>
  <br>
  Last name:<br>
  <input type="text" name="lastname" required>
  <br>
  UserName:<br>
  <input type="text" name="username" required>
  <br>
  Message:<br>
  <input type="text" name="Message" required>
  <br>
  <input type="submit" name="SUBMIT" value="Submit">
</fieldset>
</form>
<p>Please fill up the form and we'll reach you out soon".</p>
</div>
</body>
</html>