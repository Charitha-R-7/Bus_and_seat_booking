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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>



<html>
<head>
	<title>Login</title>
</head>


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
	<body>
<nav>
<h1>VOYAGE VUE</h1>
<ul><li><b>CHARITHA.R</b></li>
</ul></nav>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color:black;"><b>Login:</b></div><br>

			<input id="text" type="text" name="user_name" placeholder="enter your username"><br><br>
			<input id="text" type="password" name="password" placeholder="enter your password"><br><br>

			<input id="button" type="submit" value="Login"><br><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>