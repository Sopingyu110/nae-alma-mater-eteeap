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
	<div class="container">
		<form role="form">
			<h2>I. Personal Information</h2>
			<div class="form-group">
				<label for="name">Name<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><input type="text" class="form-control" id="lastname" placeholder="Last Name" /></div>
					<div class="col-sm-2"><input type="text" class="form-control" id="firstname" placeholder="First Name" /></div>
					<div class="col-sm-2"><input type="text" class="form-control" id="middlename" placeholder="Middle Name" /></div>
					<div class="col-sm-6"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="address">Address<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-6"><input type="text" class="form-control" id="address" placeholder="Address" /></div>
					<div class="col-sm-6"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="zipcode">ZIP Code<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><input type="text" class="form-control" id="zipcode" placeholder="ZIP Code" /></div>
					<div class="col-sm-10"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="telno">Telephone No.<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><input type="text" class="form-control" id="telno" placeholder="Number" /></div>
					<div class="col-sm-10"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="birthdate">Birthdate<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2">
						<select class="form-control" id='year'>
								<option value=''>--Year--</option>
								<?php for($i=2016; $i>=1940; $i--)
									echo "<option value='".$i."'>".$i."</option>";
								?>
						</select>
					</div>
					<div class="col-sm-2">
						<select class="form-control" id='month'>
							<option value=''>--Month--</option>
							<?php for($i=0; $i<12; $i++)
								echo "<option value='".$monthsArray[$i]."'>".$monthsArray[$i]."</option>";
							?>
						</select>
					</div>
					<div class="col-sm-2">
						<select class="form-control" id='day'>
							<option value=''>--Day--</option>
						</select>
					</div>
					<div class="col-sm-6"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="birthplace">Birthplace<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-6"><input type="text" class="form-control" id="birthplace" placeholder="Birthplace" /></div>
					<div class="col-sm-6"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="civstatus">Civil Status<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><select class="form-control" id="civstatus"><?php foreach($civilStatusArray as $a) echo "<option value='".$a."'>".$a."</option>"; ?></select></div>
					<div class="col-sm-10"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="gender">Sex<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><select class="form-control" id="gender"><?php foreach($genderArray as $a) echo "<option value='".$a."'>".$a."</option>"; ?></select></div>
					<div class="col-sm-10"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="nationality">Nationality<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><input type="text" id="user-nationality" class="form-control" placeholder="Nationality" /></div>
					<div class="col-sm-10"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="degree-priorities">Degree/Program being applied for<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-2"><input type="text" id="first-priority-degree" class="form-control" placeholder="First Priority" /></div>
					<div class="col-sm-2"><input type="text" id="second-priority-degree" class="form-control" placeholder="Second Priority" /></div>
					<div class="col-sm-2"><input type="text" id="third-priority-degree" class="form-control" placeholder="Third Priority" /></div>
					<div class="col-sm-6"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="goal-statements">Statement of your goals, objectives, or purposes in applying for the degree.<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-5"><textarea class="form-control" rows="5" id="goal-statements" placeholder="Your goals, objectives..."></textarea></div>
					<div class="col-sm-7"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="devote-time">Indicate how much time you plan to devote for personal learning activities so that you can finish the requirements in the prescribed program. Be specific.
				<span style="color: red;">*</span> :</label>
				<div class="row">
					<div class="col-sm-5"><textarea class="form-control" rows="5" id="devote-time" placeholder=""></textarea></div>
					<div class="col-sm-7"></div>
				</div>
			</div>
		</form>
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