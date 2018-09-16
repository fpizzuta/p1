<?php require('p1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Project 1</title>
    <link href="p1.css" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
		<h1>Frank Pizzuta</h1>
		<div id="imageFrame">
			<img id="pic" src="images/me.JPG" alt="Picture of me">
		</div>
		<p>My daughter thought it was funny to make me into a white walker for the photo. I have worked at a financial services company in Oaks, PA for the last 25 years. I love learning new things. Harvard will be my 6th degree!</p>
		<h2>Quote of the day</h2>
		<div>
			<span id="quote"> <?php echo $quote; ?> </span>
		</div>
	</div>
</body>
</html>