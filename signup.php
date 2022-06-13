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
			echo "Tolong masukkan informasi yang valid!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Signup</title>
</head>
<body>

<h1>Selamat datang di Ournime</h1>

	<style type="text/css">

	body{
		background-color: #ffa200;;;
	}

	h1{
		margin-top:50px;
		color:#660f0f;
		text-align:center;
		font-family:courier;
	}

	a{
		color: #660f0f;
		font-weight:800;
	}

	#text{
		color:#660f0f;
		height: 25px;
		border-radius: 5px;
		font-family:courier;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		font-family:courier;
		background-color: #660f0f;
		border: none;
	}

	#box{

		background-color: #ff9500;
		margin: auto;
		margin-top: 50px;
		width: 300px;
		padding: 100px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 25px;margin: 10px;color: #660f0f;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Klik untuk melakukan Login</a><br><br>
		</form>
	</div>
</body>
</html>