<!DOCTYPE html>
<?php
	$monthsArray=array("January", "February", "March", "April", "May", "June", 
					"July", "August", "September", "October", "November", "December");
	$civilStatusArray=array("Single", "Married", "Separated", "Divorced");
	$genderArray=array("Male", "Female", "Other");
	$quoteRand=rand(1, 2);
	if($quoteRand==1)
		$quote="<i>\"How do you like this to be? Natural and Automatic for ya.\"</i> -- <i>\"Automatic\"</i> by Red Velvet";
	else if($quoteRand==2)
		$quote="<i>\"Heavily coded but slow, or light but fast?\"</i>";
?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/faitheteeap.css">
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #EEEEEE;">
	<div class="page-header header-caps" style="margin-top: -0.1%;">
	<!--	<div class="site-head-test">
			<?php echo $quote; ?>
		</div> -->
		<a href="home.php"><img class="logo" src="images/faithlogo.png" alt="FAITH"></img></a> 
		<a href="goals.php">Goals and Objectives</a>
	</div>
	<noscript>
	<div class="alert alert-warning">This site requires Javascript. Please activate it to use the site properly.</div>
	</noscript>
	<h2>I. Personal Information</h2><br>
	<div class="container">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<td>1a. Last Name :</td>
					<td> <input type="text" /></td>
				</tr><tr>
					<td>1b. First Name :</td>
					<td> <input type="text" /></td>
				</tr><tr>
					<td>1c. Middle Name :</td>
					<td> <input type="text" /></td>
				</tr>
				<tr>
					<td>2a. Address :</td>
					<td> <input type="text" /></td>	
				</tr>
					<td>2b. ZIP Code :</td>
					<td> <input type="text" /></td>
				</tr>
				</tr>
					<td>3. Telephone No. :</td>
					<td> <input type="text" /></td>
				</tr>
				<tr>
					<td>4. Birthdate :</td>
					<td>
						<select id='year'>
							<option value=''>--Year--</option>
							<?php for($i=2016; $i>=1940; $i--)
								echo "<option value='".$i."'>".$i."</option>";
							?>
						</select>
						<select id='month'>
							<option value=''>--Month--</option>
							<?php for($i=0; $i<12; $i++)
								echo "<option value='".$monthsArray[$i]."'>".$monthsArray[$i]."</option>";
							?>
						</select>
						<select id='day'>
							<option value=''>--Day--</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>5. Birthplace :</td>
					<td> <input type="text"></td>
				</tr>
				<tr>
					<td>6. Civil Status :</td>
					<td> <select><?php foreach($civilStatusArray as $a) echo "<option value='".$a."'>".$a."</option>"; ?></select></td>
				</tr>
				<tr>
					<td>7. Sex :</td>
					<td> <select><?php foreach($genderArray as $a) echo "<option value='".$a."'>".$a."</option>"; ?></select></td>
				</tr>
				<tr>
					<td>8. Nationality :</td>
					<td> <input type="text" /></td>
				</tr>
				<tr>
					<td>9. Degree Program or field being applied for :</td>
					<td>First Priority : <input type="text" /></td>
					<td>Second Priority : <input type="text" /></td>
					<td>Third Priority : <input type="text" /></td>
				</tr>
				<tr>
					<td>10. Statement of your goals, objectives, or purposes in applying for the degree.</td>
				</tr>
				<tr>
					<td> <textarea col="5" row="30"></textarea></td>
				</tr><tr>
					<td>11.	Indicate how much time you plan to devote for personal learning activities so that you can finish the requirements in the prescribed program.  Be specific.</td>
				</tr>
				<tr>
					<td> <textarea col="5" row="30"></textarea></td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</div>
	</div>
</body>

<script src='jiaequery/jquery-1.12.3.min.js'></script>
<script>
	
		
	$(document).ready(function(){
		$("#month").on('change', function(){
			//alert(this.value);
			var year=$('#year').val(),
			month=$('#month').val(),
			day=0, i;
			
			if(this.value=="January" || this.value=="March" || this.value=="May" || this.value=="July" 
				|| this.value=="August" || this.value=="October" || this.value=="December")
			{
				day=31;
				for(i=1;i<=day; i++)
					$("#day").append("<option value="+i+">"+i+"</option>");
			}
			else if(this.value=="April" || this.value=="June" || this.value=="September" || this.value=="November")
			{
				day=30;
				for(i=1;i<=day; i++)
					$("#day").append("<option value="+i+">"+i+"</option>");
			}
			else if(this.value=="February")
			{
				/*
					For the sake of practicality with respect to time,
					the rule about leap years occur in centuries divisible by 400 is not implemented here.
				*/
				if(year%4==0)
				{
					day=29;
					for(i=1;i<=day; i++)
						$("#day").append("<option value="+i+">"+i+"</option>");
				}
				else
				{
					day=28;
					for(i=1;i<=day; i++)
						$("#day").append("<option value="+i+">"+i+"</option>");
				}
			}
				
		});
	});
</script>
</html>