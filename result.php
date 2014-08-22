<?php
session_start();

$_SESSION['counter'];

?>

<!doctype html>
<html>
<head>
	<title>result</title>
	<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}

	#container {
		margin: 0 auto;
		width: 600px;
	}
	#top {
		margin-top: 10px;
		background-color: green;
		text-align: center;
		border: 1px solid black;
	}

	#main {
		margin-top: 10px;
		border: 1px solid black;
		padding: 40px;
	}

	input {
		margin-top: 150px;
		margin-left: 420px;
	}
	
	#submit {
			border: 1px solid black;
			background-color: blue;
			color: white;
			padding: 2px 5px;
	}

	h2 {
		text-decoration: underline;
	}

	p{
		padding:5px;
	}




	</style>
</head>
<body>
	<div id="container">
		<div id="top">
			<p>Thank you for submitting this from! You have submitted this form <?=$_SESSION['counter']?> times now</p>
		</div>
		<div id="main">
			<h2>Submitted Information</h2>
<?php foreach ($_SESSION['fields'] as $name => $value) 
			{		?>
			<p><?=$name . ": " . $value?></p>
<?php }   ?>
			<form action="index.php" method="post">	
				<input id="submit" type="submit" value="Go Back">
			</form>
		</div>
	</div>
</body>
</html>