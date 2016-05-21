<?php
	$quoteRand=rand(1, 2);
	if($quoteRand==1)
		$quote="<i>\"How do you like this to be? Natural and Automatic for ya.\"</i> -- <i>\"Automatic\"</i> by Red Velvet";
	else if($quoteRand==2)
		$quote="<i>\"Heavily coded but slow, or light but fast?\"</i>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/faitheteeap.css">
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<header role="banner">
		<div class="site-head-test">
			<?php echo $quote; ?>
		</div>
		<div class="site-head-1">
			<span><a href="home.php"><img class="logo" src="images/faithlogo.png" alt="FAITH"></img></a></span><span class="resources"><a href="home.php"> << Back to Home</a></span><span class="resources">About ETEEAP</span>
		</div>
	</header>
	<div class="jumbotron" style="text-align: center;font-family: Delius, Tahoma, Sans Serif;">
		<h1>To the stars, First Asia!</h1>
		<p><i>Continue your education with FAITH-ETEEAP!</i></p>
	</div>
</body>
</html>