<?php
	$quoteRand=rand(1, 3);
	if($quoteRand==1)
		$quote="<i>\"How do you like this to be? Natural and Automatic for ya.\"</i> -- <i>\"Automatic\"</i> by Red Velvet";
	else if($quoteRand==2)
		$quote="<i>\"Heavily coded but slow, or light but fast?\"</i>";
	else if($quoteRand==3)
		$quote="<i>\"The Philippines is a beautiful country but with a generally slow Internet connection. MIND YOUR DATA USAGE.\"</i>";
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
<body style="background-image: url(images/old-white-background.jpg);">
	<div class="page-header header-caps" style="margin-top: -0.1%;">
	<!--	<div class="site-head-test">
			<?php echo $quote; ?>
		</div> -->
		<a href="home.php"><img class="logo" src="images/faithlogo.png" alt="FAITH"></img></a>
	</div>
	<noscript>
	<div class="alert alert-warning">This site requires Javascript. Please activate it to use the site properly.</div>
	</noscript>
	<div class="jumbotron jumbo-caps" style="background: #0066ff; color: white;">
		<h1>Courses for the Non-Graduate Employed</h1>
		<p><i>Continue your education with FAITH-ETEEAP!</i></p>
	</div>
	<div class="jumbotron jumbo-caps" style="background: #ffdb4d;">
		<h2>If you're...</h2>
		<div class="row" style="margin-top: 1%;">
			<div class="col-sm-4">
				<p>25 years old and above</p>
			</div>
			<div class="col-sm-4">
				<p>A Filipino citizen</p>
			</div>
			<div class="col-sm-4">
				<p>working for 5 years in the field (related to your desired degree)</p>
			</div>
		</div>
		<a href="applicationform1.php" class="btn btn-warning btn-lg">Apply now!</a>
		<div class="row" style="margin-top: 1%;">
			
		</div>
	</div>
	<div class="jumbotron jumbo-caps" style="background: #00cc00;">
		<h2>[Some text here]</h2>
	</div>
</body>
</html>