<?php 
	
	session_start();
	
	require_once('classes/User.php');
	require_once('classes/Game.php');
	
	$_SESSION['User'] = '';
	
	if(!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['email']))
	{
		$user = new User(0, $_GET['firstname'], $_GET['lastname'], $_GET['email']);
		$_SESSION['User'] = serialize($user);
	}
	
	$_SESSION['Game'] = '';
	
	/*if(isset($_GET['gameid']) && isset($_GET['gametype'])
	{*/
		$game = new Game(1, "math");
		$_SESSION['Game'] = serialize($game);
	//}
	
	var_dump($_SESSION['User']);
	var_dump($_SESSION['Game']);
	
	
?>

<html>

	<head>
		<title> MATHS is FUN </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			img {
				width: 25%;
				height: 25%;
			}
			
			.top-buffer { 
				margin-top:20px; 
			}
		</style>
	</head>
	
	<body>
		<div class="container">
		<form method="GET" action="start_game.php">
			<div class="row top-buffer">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-8">
					<h1> Please select your choice: </h1>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="row top-buffer">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-default" name="operator" value="minus"><img src="images/operators/minus.png"></img></button>
				</div>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-default" name="operator" value="plus"><img src="images/operators/plus.png"></img></button>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
			<div class="row top-buffer">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-default" name="operator" value="division"><img src="images/operators/division.png"></img></button>
				</div>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-default" name="operator" value="multiplication"><img src="images/operators/multiplication.png"></img></button>
				</div>
				<div class="col-sm-2">
				</div>
			</div>
		</form>
		</div>
	</body>

</html>
