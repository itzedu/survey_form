<?php
session_start();

?>

<!doctype html>
<html>
<head>
	<title>Survey Form</title>
	<style type="text/css">
		* {
			margin:0;
			padding: 0;
		}

		#container {
			margin: 0 auto;
			width: 960px;
		}

		form {
			border: 1px solid black;
			width: 300px;
			margin-top: 20px;
			margin-left: 150px;
			padding: 20px;
		}

		li {
			list-style-type: none;
		}

		input, select {
			float: right;
		}

		textarea {
			width: 290px;
			height: 100px
		}

		#submit {
			border: 1px solid black;
			background-color: blue;
			color: white;
			padding: 2px 5px;
		}




	</style>
</head>
<body>
	<div id="container">
		<form action="process.php" method="post">
			<li>Your Name: <input type='text' name='Name' placeholder='Name'><li>
			<li>Dojo Location: <select name="Location"><option value="Mountain View">Mountain View</option>
																						 <option value="Seattle">Seattle</option></select></li>
			<li>Favorite Language: <select name="Language"><option value="Javascript">Javascript</option>
																								 <option value="Ruby">Ruby</option>
																								 <option value="PHP">PHP</option></select><li>
			<li>Comment: </li><li><textarea name="Description"></textarea><li>
			<li><input id="submit" type="submit" value="Submit"></li>
		</form>
	</div>		
</body>
</html>