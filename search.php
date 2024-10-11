<?php
include("connection.php");
?>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Software Development</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #EADDCA">
	<div class = "center" style="background-color: #EADDCA">
		<form action="#" method="POST">
		<h1>SEARCH STUDENT DATA</h1>
        <form style="background-color: #EADDCA">
        	<input type="submit" formaction="byid.php" name="save" value="SEARCH BY ID" name="" class="btn" style="background-color: green;">
        	<input type="submit" formaction="byfname.php" name="save" value="SEARCH BY NAME" name="" class="btn" style="background-color: green;">
        	<input type="submit" formaction="bycourse.php" name="save" value="SEARCH BY COURSE" name="" class="btn" style="background-color: green;">
        	<input type="submit" formaction="displayall.php" name="save" value="DISPLAY ALL" name="" class="btn" style="background-color: green;">
        	<input type="submit" formaction="index.html" name="save" value="HOME" name="" class="btn" style="background-color: green;">
        	
		</div>
	</form>
</div>
