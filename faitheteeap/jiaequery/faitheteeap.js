	$(document).ready(function(){
		
		var i=1, j=[2,2,2,2,2,2];
		var FADE_SPEED="fast";
		var DELAY_SPEED= (FADE_SPEED=="fast") ? 200 : 600;

		$("#formal-educ").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #99ccff;'><div class='col-sm-2'><label>1. Course/Degree</label><input type='text' class='form-control' name='course-degree[]' placeholder='' /></div><div class='col-sm-2'><label>Name of School</label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");
		$("#non-formal-educ").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #ffff1a;'><div class='col-sm-3'><label>1. Title of Training Program</label><input type='text' class='form-control' name='title-training-program[]' placeholder='' /></div><div class='col-sm-3'><label>Title of Certificate Obtained</label><input type='text' class='form-control' name='title-cerf-obtained[]' placeholder='' /></div><div class='col-sm-3'><label>Inclusive Date of Attendance</label><input type='text' class='form-control' name='date-attendance[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");
		$("#other-cerf-exams").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #5cd65c;'><div class='col-sm-3'><label>1. Title of Certification Exam</label><input type='text' class='form-control' name='title-cerf-exam[]' placeholder='' /></div><div class='col-sm-2'><label>Name of </label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='upload' value='...' /></div><br><br></div>");
		
		$("#academic-awards").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #99ccff;'><div class='col-sm-4'><label>1. Award Conferred</label><input type='text' class='form-control' name='academic-awards[]' placeholder='' /></div><div class='col-sm-4'><label>Name of Conferring Organization</label><input type='text' class='form-control' name='award-conferring-org[]' placeholder='' /></div><div class='col-sm-4'><label>Address of Organization</label><input type='text' class='form-control' name='conferring-org-address[]' placeholder='' /></div></div><div class='row'><label>Date Awarded</label><div class='col-sm-2'><select class='form-control' id='award-year' name='award-year[]'><option value=''>--Year--</option><?php for($i=2016; $i>=1940; $i--) echo '<option value='".$i."'>".$i."</option>';?></select></div><div class='col-sm-2'><select class='form-control' id='award-month' name='award-month[]'><option value=''>--Month--</option><?php for($i=0; $i<12; $i++) echo "<option value='".$monthsArray[$i]."'>".$monthsArray[$i]."</option>";?></select></div><div class='col-sm-2'><select class='form-control' id='award-day' name='award-day'><option value=''>--Day--</option></select></div></div>");
		$("#com-civ-org-awards").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #ffff1a;'><div class='col-sm-4'><label>1. Award Conferred</label><input type='text' class='form-control' name='academic-awards[]' placeholder='' /></div><div class='col-sm-4'><label>Name of Conferring Organization</label><input type='text' class='form-control' name='award-conferring-org[]' placeholder='' /></div><div class='col-sm-4'><label>Address of Organization</label><input type='text' class='form-control' name='conferring-org-address[]' placeholder='' /></div></div><div class='row'><label>Date Awarded</label><div class='col-sm-2'><select class='form-control' id='award-year' name='award-year[]'><option value=''>--Year--</option><?php for($i=2016; $i>=1940; $i--) echo '<option value='".$i."'>".$i."</option>';?></select></div><div class='col-sm-2'><select class='form-control' id='award-month' name='award-month[]'><option value=''>--Month--</option><?php for($i=0; $i<12; $i++) echo "<option value='".$monthsArray[$i]."'>".$monthsArray[$i]."</option>";?></select></div><div class='col-sm-2'><select class='form-control' id='award-day' name='award-day'><option value=''>--Day--</option></select></div></div>");
		$("#work-related-awards").append("<div class='row' style='margin-bottom: 2%; padding-bottom: 2%; background: #5cd65c;'><div class='col-sm-4'><label>1. Award Conferred</label><input type='text' class='form-control' name='academic-awards[]' placeholder='' /></div><div class='col-sm-4'><label>Name of Conferring Organization</label><input type='text' class='form-control' name='award-conferring-org[]' placeholder='' /></div><div class='col-sm-4'><label>Address of Organization</label><input type='text' class='form-control' name='conferring-org-address[]' placeholder='' /></div></div><div class='row'><label>Date Awarded</label><div class='col-sm-2'><select class='form-control' id='award-year' name='award-year[]'><option value=''>--Year--</option><?php for($i=2016; $i>=1940; $i--) echo "<option value='".$i."'>".$i."</option>";?></select></div><div class='col-sm-2'><select class='form-control' id='award-month' name='award-month[]'><option value=''>--Month--</option><?php for($i=0; $i<12; $i++) echo "<option value='".$monthsArray[$i]."'>".$monthsArray[$i]."</option>";?></select></div><div class='col-sm-2'><select class='form-control' id='award-day' name='award-day'><option value=''>--Day--</option></select></div></div>");
		
		$("#form-part-2").hide();
		$("#form-part-3").hide();
		$("#form-part-4").hide();
		$("#form-part-5").hide();
		$("#form-part-6").hide();
		$("#form-part-7").hide();
		
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
		
		$("#next-form").click(function(){
			switch(i)
			{
				case 1:
				{
					$("#form-part-1").fadeOut(FADE_SPEED);
					$("#form-part-2").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
				case 2:
				{
					$("#form-part-2").fadeOut(FADE_SPEED);
					$("#form-part-3").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
				case 3:
				{
					$("#form-part-3").fadeOut(FADE_SPEED);
					$("#form-part-4").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
				case 4:
				{
					$("#form-part-4").fadeOut(FADE_SPEED);
					$("#form-part-5").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
				case 5:
				{
					$("#form-part-5").fadeOut(FADE_SPEED);
					$("#form-part-6").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
				case 6:
				{
					$("#form-part-6").fadeOut(FADE_SPEED);
					$("#form-part-7").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i++;
					break;
				}
			}
			
			
		});
		
		$("#previous-form").click(function(){
			switch(i)
			{
				case 7:
				{
					$("#form-part-7").fadeOut(FADE_SPEED)
					$("#form-part-6").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				case 6:
				{
					$("#form-part-6").fadeOut(FADE_SPEED)
					$("#form-part-5").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				case 5:
				{
					$("#form-part-5").fadeOut(FADE_SPEED)
					$("#form-part-4").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				case 4:
				{
					$("#form-part-4").fadeOut(FADE_SPEED)
					$("#form-part-3").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				case 3:
				{
					$("#form-part-3").fadeOut(FADE_SPEED)
					$("#form-part-2").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				case 2:
				{
					$("#form-part-2").fadeOut(FADE_SPEED)
					$("#form-part-1").delay(DELAY_SPEED).fadeIn(FADE_SPEED);
					i--;
					break;
				}
				
			}
			
		});
		
		$("#image").click(function(){
			alert("wat");
		});
		
		// Use j[0]
		$("#add-row-1").click(function(){
			if(j[0]%2==1)
				$("#formal-educ").append("<div class='row' id='a"+(j[0])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #99ccff;'><div class='col-sm-2'><label>"+j[0]+". Course/Degree</label><input type='text' class='form-control' name='course-degree[]' placeholder='' /></div><div class='col-sm-2'><label>Name of School</label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");			
			else if(j[0]%2==0)
				$("#formal-educ").append("<div class='row' id='a"+(j[0])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #e6f2ff;'><div class='col-sm-2'><label>"+j[0]+". Course/Degree</label><input type='text' class='form-control' name='course-degree[]' placeholder='' /></div><div class='col-sm-2'><label>Name of School</label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");			
			j[0]++;
		});
		
		$("#remove-row-1").click(function(){
			if(j[0]>2)
			{
				$("#a"+(j[0]-1)).fadeOut(FADE_SPEED, function(){$(this).remove();});
				j[0]--;
			}
		});
		
		// Use j[1]
		$("#add-row-2").click(function(){
			if(j[1]%2==1)
				$("#non-formal-educ").append("<div class='row' id='b"+(j[1])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #ffff1a;'><div class='col-sm-3'><label>"+(j[1])+". Title of Training Program</label><input type='text' class='form-control' name='title-training-program[]' placeholder='' /></div><div class='col-sm-3'><label>Title of Certificate Obtained</label><input type='text' class='form-control' name='title-cerf-obtained[]' placeholder='' /></div><div class='col-sm-3'><label>Inclusive Date of Attendance</label><input type='text' class='form-control' name='date-attendance[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");
			else if(j[1]%2==0)
				$("#non-formal-educ").append("<div class='row' id='b"+(j[1])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #ffff99;'><div class='col-sm-3'><label>"+(j[1])+". Title of Training Program</label><input type='text' class='form-control' name='title-training-program[]' placeholder='' /></div><div class='col-sm-3'><label>Title of Certificate Obtained</label><input type='text' class='form-control' name='title-cerf-obtained[]' placeholder='' /></div><div class='col-sm-3'><label>Inclusive Date of Attendance</label><input type='text' class='form-control' name='date-attendance[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='' value='...' /></div><br><br></div>");
			j[1]++;
		});
		
		$("#remove-row-2").click(function(){
			if(j[1]>2)
			{
				$("#b"+(j[1]-1)).fadeOut(FADE_SPEED, function(){$(this).remove();});
				j[1]--;
			}
		});
		
		// Use j[2]
		$("#add-row-3").click(function(){
			if(j[2]%2==1)
				$("#other-cerf-exams").append("<div class='row' id='c"+(j[2])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #5cd65c;'><div class='col-sm-3'><label>"+j[2]+". Title of Certification Exam</label><input type='text' class='form-control' name='title-cerf-exam[]' placeholder='' /></div><div class='col-sm-2'><label>Name of </label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='upload' value='...' /></div><br><br></div>");
			else if(j[2]%2==0)
				$("#other-cerf-exams").append("<div class='row' id='c"+(j[2])+"' style='margin-bottom: 2%; padding-bottom: 2%; background: #adebad;'><div class='col-sm-3'><label>"+j[2]+". Title of Certification Exam</label><input type='text' class='form-control' name='title-cerf-exam[]' placeholder='' /></div><div class='col-sm-2'><label>Name of </label><input type='text' class='form-control' name='school-name[]' placeholder='' /></div><div class='col-sm-2'><label>Address of School</label><input type='text' class='form-control' name='school-address[]' placeholder='' /></div><div class='col-sm-2'><label>Inclusive Dates</label><input type='text' class='form-control' name='inclusive-dates[]' placeholder='' /></div><div class='col-sm-3'><label>Photo of Certificate</label><input type='file' onclick='upload' value='...' /></div><br><br></div>");
			j[2]++;
		});
		
		$("#remove-row-3").click(function(){
			if(j[2]>2)
			{
				$("#c"+(j[2]-1)).fadeOut(FADE_SPEED, function(){$(this).remove();});
				j[2]--;
			}
		});
	});