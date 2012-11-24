<div class="accordian">
<ul>
<li id="acc1">Personal Details</li>
<li id="acc1c">
<table class="accTable" cellspacing="10px" id="personalTable">
<tr>
<td>Address Line 1</td>
<td><input id="add1" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Address Line 2</td>
<td><input id="add2" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Town</td>
<td><input id="town" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Postcode</td>
<td><input id="postcode" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Personal URL</td>
<td><input id="perurl" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Gender</td>
<td>
<select id="female" size="1">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</td>
</tr>
<tr>
<td>Work Statement Issued by</td>
<td><input id="authwork" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Number of GCSEs passed</td>
<td>
<select id="noofgcse">
<?php 
for ($i=1; $i<=20; $i++)
	echo "<option value= \"".$i."\">".($i)."</option>";
?>
</select>
</td>
</tr>
<tr>
<td>GCSE English Grade</td>
<td><input id="gcseeng" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>GCSE Math Grade</td>
<td><input id="gcsemath" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Current Student Status</td>
<td>
<select id="stusta">
<option>Part Time</option>
<option>Full Time</option>
<option>Not a Student</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="perform">Submit</span>
</td>
</tr>
</table>
<div id="temp1" class="postMessage">Your Personal Details have been Saved. Edit</div>
<script type="text/javascript">
$('#perform').click(function(){
	var data = {
			add1 : $('#add1').val(),
			add2 : $('#add2').val(),
			town : $('#town').val(),
			postcode : $('#postcode').val(),
			female : $('#female').val(),
			perurl : $('#perurl').val(),
			authwork : $('#authwork').val(),
			noofgcse : $('#noofgcse').val(),
			gcseeng : $('#gcseeng').val(),
			gcsemath : $('#gcsemath').val(),
			stusta : $('#stusta').val()
	}
	send(data);
});
function send(dataSend){
	$.ajax({
		url: "<?php echo base_url()?>/index.php/jobseeker/Profile/savePersonal",
		type: 'POST',
		data: dataSend,
		success: function(msg){
			$('#temp1').html(msg);
			$('#personalTable').slideUp("slow");
		}
	});
}
</script>
</li>
<li id="acc2">Contact Details</li>										<!--  Accordian 2  -->
<li id="acc2c">
<table class="accTable" cellspacing="10px" id="contactTable">
<tr>
<td>Alternate Mail</td>
<td><input id="altmail" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input id="mobile" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Landline Number</td>
<td><input id="land" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Contact Preference</td>
<td>
<select id="conpre" size="1">
<option value="Email1">Primary E-mail</option>
<option value = "Email2">Alternate E-mail</option>
<option value = "Mobile">Mobile</option>
<option value = "Landline">Mobile</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="conform">Submit</span>
</td>
</tr>
</table>
<div id="temp2" class="postMessage"></div>
<script type = "text/javascript">
$('#conform').click(function(){
	var data = {
			altmail : $('#altmail').val(),
			mobile : $('#mobile').val(),
			land : $('#land').val(),
			conpre : $('#conpre').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/saveContact",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp2').html(msg);
			$('#contactTable').slideUp("slow");
		}
	});
});
</script>
</li>																		<!--  Accordian 2  -->
<li id="acc3">Educational Qualifications</li>								<!-- Educational Qualifications -->
<li id="acc3c">
<table class="accTable" cellspacing="10px" id="eduTable">
<tr>
<td>Qualification</td>
<td><input id="qual" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td>Course</td>
<td><input id="course" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td>Educational Level</td>
<td><select id="edulevel">
<option value = "1">General Degree</option>
<option value = "2">Sixth-form or equivalent secondary education HNC</option>
<option value = "3">BA/BSc Degree or Equivalent</option>
<option value = "4">MA/MSc Degree or Equivalent</option>
<option value = "5">PhD or Equivalent Doctorate</option>
</select>
</td>
</tr>
<tr>
<td>Course Type</td>
<td>
<select id="vocational">
<option value = "0">Vocational</option>
<option value = "1">Academic</option>
<option value = "NULL">Not Sure</option>
</select>
</td>
</tr>
<tr>
<td>Specialization</td>
<td><input id="spec" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td>Institution Name</td>
<td><input id="insti" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td>Country</td>
<td><input id="country" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Year</td>
<td><input id="year" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Grade</td>
<td><input id="grade" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Verified</td>
<td>
<select id="veri">
<option value = "0">Yes</option>
<option value = "1">No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="veriby" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="eduform">Submit</span>
</td>
</tr>
</table>
<div id="temp3" class="postMessage"></div>
<script type="text/javascript">
$('#eduform').click(function(){
	var data = {
			qualificationType : $('#qual').val(),
			courseName : $('#course').val(),
			EducationLevels_idEducationLevel : $('#edulevel').val(),
			vocational : $('#vocational').val(),
			nameOfInstitutions : $('#insti').val(),
			mainSubject : $('#spec').val(),
			country : $('#country').val(),
			yearObtained : $('#year').val(),
			result : $('#grade').val(),
			verified : $('#veri').val(),
			howVerified : $('#veriby').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/saveEdu",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp3').html(msg);
			$('#eduTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id="acc4">Professional Qualifications</li>
<li id="acc4c">
<table class="accTable" cellspacing="10px" id="proTable">
<tr>
<td>Qualification</td>
<td><input id="qualification" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Sector</td>
<td>
<select id="sector">
<option value = "NULL">None</option>
</select>
</td>
</tr>
<tr>
<td>Other Sector</td>
<td><input id="other" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Awarding Body</td>
<td><input id="awardingbody" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Year Obtained</td>
<td><input id="profyear" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Result</td>
<td><input id="proresult" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Verified</td>
<td>
<select id="profveri">
<option value = "0">Yes</option>
<option value = "1">No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="profveriby" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="proform">Submit</span>
</td>
</tr>
</table>
<div id="temp4" class="postMessage"></div>
<script type="text/javascript">
$('#proform').click(function(){
	var data = {
			qualificationName : $('#qualification').val(),
			Sectors_idSectors : $('#sector').val(),
			otherSector : $('#other').val(),
			awardingBody : $('#awardingbody').val(),
			yearObtained : $('#profyear').val(),
			result : $('#proresult').val(),
			verified : $('#profveri').val(),
			howVerified : $('#profveriby').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/savePro",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp4').html(msg);
			$('#proTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id="acc5">Experiences</li>
<li id="acc5c">
<table class="accTable" cellspacing="10px" id="expTable">
<tr>
<td>Job Title</td>
<td>
<select id="jobtitle">
<option value="3">Software Developer</option>
<option value="4">Web Developer</option>
<option value="NULL">Other</option>
</select>
</td>
</tr>
<tr>
<td>Other Job Title</td>
<td><input id="otherjobtitle" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Employment Level</td>
<td>
<select id="emplevel">
<option value="1">Entry Level</option>
<option value="2">Senior</option>
<option value="3">Junior</option>
</select>
</td>
</tr>
<tr>
<td>Company Name</td>
<td><input id="emplrname" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Date Started</td>
<td><input id="datestart" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Date Ended</td>
<td><input id="dateend" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Key Duties</td>
<td><input id="duties" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Verified</td>
<td>
<select id="expveri">
<option value="0">Yes</option>
<option value="1">No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="expveriby" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="expform">Submit</span>
</td>
</tr>
</table>
<div id="temp5" class="postMessage"></div>
<script type="text/javascript">
$('#expform').click(function(){
	var data = {
			JobTitles_idJobTitles : $('#jobtitle').val(),
			otherJobTitle : $('#otherjobtitle').val(),
			EmploymentLevels_idLevelsOfEmployment : $('#emplevel').val(),
			employerName : $('#emplrname').val(),
			dateStarted : $('#datestart').val(),
			dateFinished : $('#dateend').val(),
			keyDuties : $('#duties').val(),
			verified : $('#expveri').val(),
			howVerified : $('#expveriby').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/saveExp",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp5').html(msg);
			$('#expTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id="acc6">Referees</li>
<li id="acc6c">
<table class="accTable" cellspacing="10px" id="refTable">
<tr>
<td>Title</td>
<td>
<select name="title" size="1">
<option>Mr</option>
<option>Mrs</option>
</select>
</td>
</tr>
<tr>
<td>First Name</td>
<td><input id="reffirst" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Last Name</td>
<td><input id="reflast" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Email Id</td>
<td><input id="refemail" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Contact Number</td>
<td><input id="refcontact" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Referal Type</td>
<td>
<select name="reftype" size="1">
<option>Employer</option>
<option>Academic</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="refform">Submit</span>
</td>
</tr>
</table>
<div id="temp6" class="postMessage"></div>
<script type="text/javascript">
$('#refform').click(function(){
	var data = {
			title : $('#title').val(),
			forename : $('#reffirst').val(),
			surname : $('#reflast').val(),
			email : $('#refemail').val(),
			contactPhone : $('#refcontact').val(),
			relationship : $('#reftype').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/saveRef",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp6').html(msg);
			$('#refTable').slideUp("slow");
		}
	});
});
function getdata(id)
{
	var what="", where="";
	switch(id)
	{
	case "acc1": what = "addressLine1";
				where = "persons";
				to = "temp1";
				break;
	case "acc2": what = "contactPreference";
				where = "persons";
				to = "temp2";
				break;
	case "acc3": what = "qualificationType";
				where = "educational_qualifications";
				to = "temp3";
				break;
	case "acc4": what = "qualificationName";
				where = "professional_qualifications";
				to = "temp4";
				break;
	case "acc5": what = "dateStarted";
				where = "experiences";
				to = "temp5";
				break;
	case "acc6": what = "forename";
				where = "referees";
				to = "temp6";
				break;
	};
	
	var dataSend = {
			what : what,
			where : where
	};
var display="";
var table = "";
var open = true;
	
	$.ajax({
		url: "<?php echo base_url()?>/index.php/jobseeker/Profile/getData",
		type: 'POST',
		data: dataSend,
		success: function(msg){
			switch(id)
			{
			case "acc1":
				table = "personalTable"; if(msg != "NULL")
			{
				display = "Personal Information is saved. Click <span id=\"edit1\">Here</span> to edit it.";
				open = false;
			}
						break;
			case "acc2": 
				table = "contactTable";if(msg != "NULL")
			{
				display = "Contact Information is saved. Click <span id=\"edit1\">Here</span> to edit it.";
				open = false;
			}
						break;
			case "acc3":
				table = "eduTable";if(msg != "NULL")
			{
				var temp = new Array();
				temp = msg.split("|");
				for(i=0;i<(temp.length-1);i++)
					display += temp[i]+" has been added to your Educational Qualifications. Click <span id=\"edit3-"+i+"\">Here</span> to delete it.<br>";
				open = false;
			}
						break;
			case "acc4":
				table = "proTable";if(msg != "NULL")
			{
				var temp = new Array();
				temp = msg.split("|");
				for(i=0;i<(temp.length-1);i++)
					display += temp[i]+" has been added to your Professional Qualifications. Click <span id=\"edit4-"+i+"\">Here</span> to delete it.<br>";
				open = false;
			}
						break;
			case "acc5": 
				table = "expTable";if(msg != "NULL")
			{
				var temp = new Array();
				temp = msg.split("|");
				for(i=0;i<(temp.length-1);i++)
					display += temp[i]+" has been added to your Experiences. Click <span id=\"edit5-"+i+"\">Here</span> to delete it.<br>";
				open = false;
			}
						break;
			case "acc6": 
				table = "refTable";if(msg != "NULL")
			{
				var temp = new Array();
				temp = msg.split("|");
				for(i=0;i<(temp.length-1);i++)
					display += temp[i]+" has been added as your Referee. Click <span id=\"edit4-"+i+"\">Here</span> to delete him/her.<br>";
				open = false;
			}
						break;
			};
			if(msg!="NULL")
			{
			$('#'+to).html(display);
			if(!open)
			$('#'+table).hide();
			}
			else
				$('#'+table).show();
		}
	});
}
</script>
</li>
</ul>
</div>