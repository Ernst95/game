<?php
	session_start();
	
	require_once('classes/Score.php');
	require_once('classes/Game.php');
	require_once('classes/User.php');
	
	$user = unserialize($_SESSION['User']);
	$game = unserialize($_SESSION['Game']);
	
	echo $user->getUserid();
	
	$score = new Score(0, $_SESSION['correct'], $game->getgameId(), $user->getUserid());
	
	var_dump($score);
	
?>


<html>

	<head>
		<title> Score </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<h1> Your score: </h1>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<p> You got <?php echo $_SESSION['correct']; ?> out of 10 correct!!! </p>
			</div>
				<div class="col-sm-4">
			</div>
		</div>
		</div>
	</body>

</html>