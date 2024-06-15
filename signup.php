<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	#text{

		 height: 25px;
		border-radius: 5px;
		padding: 4px;
	 border: solid thin #aaa;
	width: 100%;
	}

	#button{

		 padding: 10px;
		 width: 100px;
		 color: black;
		 background-color: lavender;
		
	}

	#box{

		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;position:absolute;top:250px;height:290px;left:1100px;
	}
	
	
	*{margin:0px;padding:0px;box-sizing:border-box;}
body{width:100%;background-image:url("bg.jpg");cursor:pointer;
background-size:cover;
background-repeat:no-repeat;}
nav{width:100%;background-color:white;height:66px;line height:75px;}
 nav h1{font-size:32px;font-family:san-seriff;text-transform:uppercase;float:left;line-height:75px;background-image: linear-gradient(to right, blue 0%, #ff00bf 100%);
color: transparent;-webkit-background-clip: text;position:absolute;left:28px;}
nav ul{float:right}
nav ul li{float:left;list-style:none;position:relative;font-family:san-seriff;color:brown;font-size:24px;padding:24px 80px;}
//nav ul li a{text-decoration:none;font-family:san-seriff;color:brown;font-size:20px;padding:24px 80px; display:block;}
	</style>
	</style>
    <nav>
<nav>
<h1>VOYAGE VUE</h1>
<ul><li><b>CHARITHA.R</b></li>
</ul></nav>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color:black;"><b>Signup:</b></div><br>

			<input id="text" type="text" name="user_name" placeholder="enter your username"><br><br>
			<input id="text" type="password" name="password" placeholder="enter your password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br><br>

			<a href="login.php">Click to login</a><br><br>
		</form>
	</div>
</body>
</html>