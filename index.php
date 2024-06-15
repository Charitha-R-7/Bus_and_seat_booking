<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html>
<head>
<style>
*{margin:0px;padding:0px;box-sizing:border-box;}
body{background-color:lightblue;}
nav{width:100%;background-color:white;height:66px;line height:75px;}
 nav h1{font-size:32px;font-family:san-seriff;text-transform:uppercase;float:left;line-height:75px;background-image: linear-gradient(to right, blue0%, #ff00bf 100%);
color: transparent;-webkit-background-clip: text;position:absolute;left:18px;}
nav ul{float:right}
nav ul li{float:left;list-style:none;position:relative;font-size:24px;}
nav ul li a{text-decoration:none;font-family:san-seriff;color:brown;font-size:20px;padding:24px 80px; display:block;}
nav ul li a:hover{background-color:#f0f0f0;}
table, th, td {
  border: 1px solid blue;
  border-collapse: collapse;padding:10px;text-align:left;
}
th, td {
  background-color: white;
}
#b1{background-color:lavender;padding:10px 25px;border-radius:6px;}
#t1{color:red;font-size:20px;}
#c1{font-size: 24px;font-family:san-seriff;padding:13px;}
</style>
</head>
<body>
<nav>
<h1>VOYAGE VUE</h1>
<ul><li><a href="logout.php"><b>LOGOUT</b></a></li>
</ul></nav>
	<br>
	<p id="c1"><b>Hello, <?php echo $user_data['user_name']; ?> !</b></p>
	<p id="c1"><b>Welcome To Voyage Vue, View Buses Here To Reach Your Destination.</b></p>
	<br><br>
	
<table style="width:100%">
  <tr id="t1">
    <th><b>FROM</b></th>
    <th><b>TO</b></th> 
    <th><b>AVAILABLE  BUSES</b></th>
  </tr>
  <tr>
    <td><b>HOSUR</b></td>
    <td><b>CHENNAI</b></td>
    <td><a href="viewbus.php"><button type="submit" id="b1"><b>VIEW BUSES</b></button></a></td>
  </tr>
  <tr>
    <td><b>CHENNAI</b></td>
    <td><b>HOSUR</b></td>
    <td><a href="viewbus.php"><button type="submit" id="b1"><b>VIEW BUSES</b></button></a></td>
  </tr>
  <tr>
    <td><b>BENGALURU</b></td>
    <td><b>HANUMAKONDA</b></td>
    <td><a href="viewbus.php"><button type="submit" id="b1"><b>VIEW BUSES</b></button></a></td>
  </tr>
  <tr>
    <td><b>HANUMAKONDA</b></td>
    <td><b>BENGALURU</b></td>
    <td><a href="viewbus.php"><button type="submit" id="b1"><b>VIEW BUSES</b></button></a></td>
  </tr>
</table>

</body>
</html>