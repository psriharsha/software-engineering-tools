<div class="accordian">
<ul>
<li id="acc1">Personal Details</li>
<li id="acc1c">
<div id="temp1" class="postMessage"><span id="edit1"></span></div>
<table class="accTable" cellspacing="10px" id="personalTable">
<tr>
<td>Address Line 1</td>
<td><input id="add1" class="add1" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Address Line 2</td>
<td><input id="add2" class="add2" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Town</td>
<td><input id="town" class="town" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Postcode</td>
<td><input id="postcode" class="postcode" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Personal URL</td>
<td><input id="perurl" class="perurl" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Gender</td>
<td>
<select id="female" class="female" size="1">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</td>
</tr>
<tr>
<td>Work Statement Issued by</td>
<td><input id="authwork" class="authwork" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Number of GCSEs passed</td>
<td>
<select id="noofgcse" class="noofgcse">
<?php 
for ($i=1; $i<=20; $i++)
	echo "<option value= \"".$i."\">".($i)."</option>";
?>
</select>
</td>
</tr>
<tr>
<td>GCSE English Grade</td>
<td><input id="gcseeng" class="gcseeng" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>GCSE Math Grade</td>
<td><input id="gcsemath" class="gcsemath" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Current Student Status</td>
<td>
<select id="stusta" class="stusta">
<option>Part Time</option>
<option>Full Time</option>
<option>Not a Student</option>
</select>
</td>
</tr>
<tr>
<td>Job Preference</td>
<td>
<select id="jobpref" class="stusta">
<option value="">Select</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="perform">Submit</span>
</td>
</tr>
</table>
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
			stusta : $('#stusta').val(),
			jobpref : $('#jobpref').val()
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
<div id="temp2" class="postMessage"><span id="edit2"></span></div>
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
<div id="temp3" class="postMessage"></div>
<table class="accTable" cellspacing="10px" id="eduTable">
<tr>
<td>Qualification</td>
<td><input id="qual" name="qual" type="text" size="40" maxlength="20" />
</td>
</tr>
<tr>
<td>Course</td>
<td><input id="course" name="course" type="text" size="40" maxlength="20" />
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
<td><input id="insti" name="insti" type="text" size="40" maxlength="20" />
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
<td><input id="veriby" type="text" size="40" maxlength="20"/>
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="eduform">Submit</span>
</td>
</tr>
</table>
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
			$('#temp3').append("<br>"+msg);
			$('#eduTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id="acc4">Professional Qualifications</li>
<li id="acc4c">
<div id="temp4" class="postMessage"></div>
<table class="accTable" cellspacing="10px" id="proTable">
<tr>
<td>Qualification</td>
<td><input id="qualification" name="qualification" type="text" size="20" maxlength="20" />
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
<td><input id="other" type="text" size="20" maxlength="20" disabled="disabled" />
</td>
</tr>
<tr>
<td>Awarding Body</td>
<td><input id="awardingbody" name="awardingbody" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Year Obtained</td>
<td><input id="profyear" name="profyear" type="text" size="20" maxlength="20" />
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
			$('#temp4').append("<br>"+msg);
			$('#proTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id="acc5">Experiences</li>
<li id="acc5c">
<div id="temp5" class="postMessage"></div>
<table class="accTable" cellspacing="10px" id="expTable">
<tr>
<td>Job Title</td>
<td>
<select id="jobtitle">
<option value="">Select</option>
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
			$('#temp5').append("<br>"+msg);
			$('#expTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id = "acc6">Skills</li>
<li id = "acc6c">
<div id = "temp6" class="postMessage"></div>
<table class="accTable" cellspacing="10px" id="skillTable">
<tr>
<td>Skill Name</td>
<td><input id="skillName" type="text" size="40" maxlength="40" /></td>
</tr>
<tr>
<td>Skill Level</td>
<td>
<select id="skillLevel">
<option value="Basic">Basic</option>
<option value="Good">Good</option>
<option value="Excellent">Excellent</option>
</select>
</td>
</tr>
<tr>
<td>Verified</td>
<td>
<select id="skillVeri">
<option value="0">Yes</option>
<option value="1">No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="skillVeriBy" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData" id="skillform">Submit</span>
</td>
</tr>
</table>
<script type="text/javascript">
$('#skillform').click(function(){
	var data = {
			skillName : $('#skillName').val(),
			skillLevel : $('#skillLevel').val(),
			verified : $('#skillVeri').val(),
			howVerified : $('#skillVeriBy').val()
	};
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/saveSkill",
		type: 'POST',
		data: data,
		success: function(msg){
			$('#temp6').append("<br>"+msg);
			$('#skillTable').slideUp("slow");
		}
	});
});
</script>
</li>
<li id = "acc7">Referees</li>
<li id="acc7c">
<div id="temp7" class="postMessage"></div>
<table class="accTable" cellspacing="10px" id="refTable">
<tr>
<td>Title</td>
<td>
<select id="title" size="1">
<option value="Mr">Mr</option>
<option value="Ms">Ms</option>
<option value="Mrs">Mrs</option>
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
			$('#temp7').append("<br>"+msg);
			$('#refTable').slideUp("slow");
		}
	});
});
function getdata(id)
{


	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/getEduLevel",
		type: 'POST',
		success: function(msg){
			var finalMessage = "",stringSplit;
			stringSplit = msg.split("|");
			var first = false;
			for(i=0;i<(stringSplit.length-1);i++)
			{
				if(first == true)
				first = false;
				else
					first = true;
				if(first == true)
				finalMessage += "<option value=\""+stringSplit[i]+"\">";
				else
					finalMessage += stringSplit[i]+"</option>";
			} 
			$('#edulevel').html(finalMessage);
		}
	});
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/getAllSectors",
		type: 'POST',
		success: function(msg){
			var finalMessage = "",stringSplit;
			stringSplit = msg.split("|");
			var first = false;
			for(i=0;i<(stringSplit.length-1);i++)
			{
				if(first == true)
				first = false;
				else
					first = true;
				if(first == true)
				finalMessage += "<option value=\""+stringSplit[i]+"\">";
				else
					finalMessage += stringSplit[i]+"</option>";
			} 
			$('#sector').html(finalMessage);
		}
	});
	$.ajax({
		url: "<?php echo base_url()?>index.php/jobseeker/Profile/getJobTitles",
		type: 'POST',
		success: function(msg){
			var finalMessage = "",stringSplit;
			stringSplit = msg.split("|");
			var first = false;
			finalMessage = "<option value=\"\">Select</option>";
			for(i=0;i<(stringSplit.length-1);i++)
			{
				if(first == true)
				first = false;
				else
					first = true;
				if(first == true)
				finalMessage += "<option value=\""+stringSplit[i]+"\">";
				else
					finalMessage += stringSplit[i]+"</option>";
			} 
			$('#jobtitle').html(finalMessage);
			$('#jobpref').html(finalMessage);
		}
	});
	
	var what1="", what2="", where="";
	switch(id)
	{
	case "acc1": what1 = "addressLine1";
				where = "persons";
				what2 = "addressLine1";
				to = "temp1";
				break;
	case "acc2": what1 = "contactPreference";
				where = "persons";
				what2 = "addressLine1";
				to = "temp2";
				break;
	case "acc3": what1 = "qualificationType";
				where = "educational_qualifications";
				what2 = "idEducationalQualifications";
				to = "temp3";
				break;
	case "acc4": what1 = "qualificationName";
				where = "professional_qualifications";
				what2 = "idProfessionalQualifications";
				to = "temp4";
				break;
	case "acc5": what1 = "dateStarted";
				where = "experiences";
				what2 = "idExperiences";
				to = "temp5";
				break;
	case "acc6": what1 = "skillName";
				where = "skills";
				what2 = "idSkills";
				to = "temp6";
				break;
	case "acc7": what1 = "forename";
				where = "referees";
				what2 = "idReferees";
				to = "temp7";
				break;
	};
	
	var dataSend = {
			what1 : what1,
			what2 : what2,
			where : where
	};
var display="";
var table = "";
var append = "";
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
				display = "Contact Information is saved. Click <span id=\"edit2\">Here</span> to edit it.";
				open = false;
			}
						break;
			case "acc3":
				table = "eduTable";if(msg != "NULL")
			{
				var stringSplit = new Array();
				stringSplit = msg.split("#");
				for(i=0;i<(stringSplit.length-1);i++){
					var idSplit = stringSplit[i].split("|");
					for(j=0;j<(idSplit.length-1);)
					display += idSplit[j]+" has been added to your Educational Qualifications. Click <span id=\"edit3-"+idSplit[++j]+"\">Here</span> to delete it.<br>";

					append = "Click <span id = \"T"+table+"\">Here</span> to add another Educational Qualification to your CV";}				
				open = false;
			}
						break;
			case "acc4":
				table = "proTable";if(msg != "NULL")
			{
				var stringSplit = new Array();
				stringSplit = msg.split("#");
				for(i=0;i<(stringSplit.length-1);i++){
					var idSplit = stringSplit[i].split("|");
					for(j=0;j<(idSplit.length-1);)
					display += idSplit[j]+" has been added to your Professional Qualifications. Click <span id=\"edit4-"+idSplit[++j]+"\">Here</span> to delete it.<br>";

					append = "Click <span id = \"T"+table+"\">Here</span> to add another Professional Qualification to your CV";}
				open = false;
			}
						break;
			case "acc5": 
				table = "expTable";if(msg != "NULL")
			{
				var stringSplit = new Array();
				stringSplit = msg.split("#");
				for(i=0;i<(stringSplit.length-1);i++){
					var idSplit = stringSplit[i].split("|");
					for(j=0;j<(idSplit.length-1);)
					display += idSplit[j]+" has been added to your Experiences. Click <span id=\"edit5-"+idSplit[++j]+"\">Here</span> to delete it.<br>";

					append = "Click <span id = \"T"+table+"\">Here</span> to add another Experience to your CV";}
				open = false;
			}
						break;
			case "acc6": 
				table = "skillTable";
				if(msg != "NULL")
			{
				var stringSplit = new Array();
				stringSplit = msg.split("#");
				for(i=0;i<(stringSplit.length-1);i++){
					var idSplit = stringSplit[i].split("|");
					for(j=0;j<(idSplit.length-1);)
					display += idSplit[j]+" has been added to your Skills. Click <span id=\"edit6-"+idSplit[++j]+"\">Here</span> to delete it.<br>";

					append = "Click <span id = \"T"+table+"\">Here</span> to add another Skill to your CV";}
				open = false;
			}
						break;
			case "acc7": 
				table = "refTable";if(msg != "NULL")
			{
				var stringSplit = new Array();
				stringSplit = msg.split("#");
				for(i=0;i<(stringSplit.length-1);i++){
					var idSplit = stringSplit[i].split("|");
					for(j=0;j<(idSplit.length-1);)
					display += idSplit[j]+" has been added as your Referee. Click <span id=\"edit7-"+idSplit[++j]+"\">Here</span> to delete him/her.<br>";

					append = "Click <span id = \"T"+table+"\">Here</span> to add another Referee to your CV";}
				open = false;
			}
						break;
			};
			$('#'+to).html(display);
			$('#'+to).append(append);
			if(!open)
			$('#'+table).slideUp('slow');
			else
				$('#'+table).slideDown('slow');
			$('#'+to+" span").click(function(){
				var toSend = $(this).attr("id");
				var contains = toSend.slice(0,4);
				if(contains == "edit")
				{
				toSend = toSend.replace("edit","");	
				if(toSend!=1 && toSend!=2){
					var dataDelete = {
							from : toSend.slice(0,1),
							del : toSend.slice(2, toSend.length)
					};
					$.ajax({
						url: "<?php echo base_url()?>index.php/jobseeker/Profile/deleteBySpan",
						type: 'POST',
						data: dataDelete,
						success: function(msg){
							if(msg == "Success")
							{
								getdata("acc"+dataDelete['from']);
							}
						}
					});
				}
				else if(toSend == 1)
					$('#personalTable').slideDown('slow');
				else $('#contactTable').slideDown('slow');
				}
				else
					$('#'+table).show();
			});
		}
	});
}
</script>
</li>
</ul>
</div>