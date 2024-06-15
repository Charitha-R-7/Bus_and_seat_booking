<html>
<head><style>
*{margin:0px;padding:0px;box-sizing:border-box;}
body{background-color:lightblue;}
nav{width:100%;background-color:white;height:66px;line height:75px;}
 nav h1{font-size:32px;font-family:san-seriff;text-transform:uppercase;float:left;line-height:75px;background-image: linear-gradient(to right, blue 0%, #ff00bf 100%);
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
</style></head>
<body>
<nav>
<h1>VOYAGE VUE</h1>
<ul><li><a href="logout.php"><b>LOGOUT</b></a></li>
</ul></nav><br><br><br>
<table style="width:100%">
  <tr id="t1">
    <th><b>BUS</b></th>
    <th><b>DEPARTURE</b></th> 
	<th><b>DURATION</b></th>
	<th><b>ARRIVAL</b></th>
	<th><b>FARE</b></th>
    <th><b>SEATS AVAILABLE</b></th>
  </tr>
  <tr>
    <td><b>VKK TRAVELS</b></td>
    <td><b>23:00</b></td>
	<th><b>05h 45m</b></th>
	<th><b>04:45</b></th>
	<th><b>550</b></th>
    <td><a href="seat.php"><button type="submit" id="b1"><b>VIEW SEATS</b></button></a></td>
  </tr>
  <tr>
    <td><b>SRM TRAVELS</b></td>
    <td><b>23:30</b></td>
	<th><b>05h 45m</b></th>
	<th><b>05:15</b></th>
	<th><b>540</b></th>
    <td><a href="seat.php"><button type="submit" id="b1"><b>VIEW SEATS</b></button></a></td>
  </tr>
  <tr>
    <td><b>KTC TRAVELS</b></td>
    <td><b>09:00</b></td>
	<th><b>05h 45m</b></th>
	<th><b>14:45</b></th>
	<th><b>600</b></th>
    <td><a href="seat.php"><button type="submit" id="b1"><b>VIEW SEATS</b></button></a></td>
  </tr>
  <tr>
    <td><b>SRM TRAVELS</b></td>
    <td><b>04:30</b></td>
	<th><b>05h 00m</b></th>
	<th><b>05:00</b></th>
	<th><b>630</b></th>
    <td><a href="seat.php"><button type="submit" id="b1"><b>VIEW SEATS</b></button></a></td>
  </tr></table>
</body></html>