<div class="accordian">
<ul>
<li id="acc1">Personal Details</li>
<li id="acc1c">
<table class="accTable" cellspacing="10px">
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
for ($i=0; $i<20; $i++)
	echo "<option value= \"".$i."\">".($i+1)."</option>";
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
<div id="temp"></div>
<script type="text/javascript">
$('#perform').click(function(){
	alert("hi");
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
			$('#temp').html(msg);
		}
	});
}
</script>
</td>
</tr>
</table>
</li>
<li id="acc2">Contact Details</li>										<!--  Accordian 2  -->
<li id="acc2c">
<table class="accTable" cellspacing="10px">
<tr>
<td>Alternate Mail</td>
<td><input name="altmail" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input name="mobile" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Landline Number</td>
<td><input name="land" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Contact Preference</td>
<td>
<select name="conpre" size="1">
<option>Primary E-mail</option>
<option>Mobile</option>
<option>Landline</option>
</select>
</td>
</tr>
</table>
</li>																		<!--  Accordian 2  -->
<li id="acc3">Educational Qualifications</li>								<!-- Educational Qualifications -->
<li id="acc3c">
<table class="accTable" cellspacing="10px">
<tr>
<td>Qualification</td>
<td><input name="qual" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Course</td>
<td><input name="course" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Educational Level</td>
<td><input name="edulevel" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Course Type</td>
<td><input name="coursetype" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Specialization</td>
<td><input name="coursetype" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Institution Name</td>
<td><input name="insti" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Country</td>
<td><input name="country" type="text" size="20" maxlength="20" />
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
<option>Yes</option>
<option>No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="veri" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-top: 30px"><span class="sendData">Submit</span>
</td>
</tr>
</table>
</li>
<li id="acc4">Professional Qualifications</li>
<li id="acc4c">
<table class="accTable" cellspacing="10px">
<tr>
<td>Qualification</td>
<td><input id="qualification" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Sector</td>
<td>
<select id="sector"></select>
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
<td><input id="result" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Verified</td>
<td>
<select id="profveri">
<option>Yes</option>
<option>No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="profveriby" type="text" size="20" maxlength="20" />
</td>
</tr>
</table>
</li>
<li id="acc5">Experiences</li>
<li id="acc5c">
<table class="accTable" cellspacing="10px">
<tr>
<td>Job Title</td>
<td><input id="jobtitle" type="text" size="20" maxlength="20" />
</td>
</tr>
<tr>
<td>Employment Level</td>
<td><input id="emplevel" type="text" size="20" maxlength="20" />
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
<option>Yes</option>
<option>No</option>
</select>
</td>
</tr>
<tr>
<td>Verified By</td>
<td><input id="expveriby" type="text" size="20" maxlength="20" />
</td>
</tr>
</table>
</li>
<li id="acc6">Referees</li>
<li id="acc6c">
<table class="accTable" cellspacing="10px">
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
</table>
</li>
</ul>
</div>