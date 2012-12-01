
<div id="search">
<fieldset>
<legend><h2>Search form</h2></legend>
<form action ="<?php echo base_url()?>index.php/employer/search_Control/searchJobseeker" method="post">
	
	<fieldset>
	<legend><h3>Job Preference</h3></legend>
	<table id="jobPreference" width="600">
		<tr>
			<td><h5>job title: </h5></td>
			<td><?php echo form_dropdown('preJob', $dropdown_job);?></td>
	
	</table>
	</fieldset>
	
	<fieldset>
	<legend><h3>Qualification</h3></legend>
	<table id="education" width="600">
	<tr>
		<td><h5>education level:</h5></td>
		<td><?php echo form_dropdown('educationLevel', $dropdown_education);?></th>
	</tr>
	<tr>
		<td><h5>number of GCSE pass: </h5></td>
		<td><input type="text" name="gcsePass"/></td>
	</tr>
	<tr>
		<td><h5>qualification type: </h5></td>
		<td><input type="text" name="qualificationType"/></td> 
	</tr>
	<tr>
		<td><h5>professional qualification: </h5></td>
		<td><input type="text" name="proQualification"/></td>
	</tr> 

	</table>
	</fieldset>
	
	<fieldset>
	<legend><h3>Experience</h3></legend>
	<table id="qualification" width="550">
	<tr>
		<td><h5>skill:</h5></td>
		<td><input type="text" name="skill"></td> 
	</tr>
	<tr>
		<td><h5>job title</h5></td>
		<td><?php echo form_dropdown('jobTitle', $dropdown_job);?></td>
	</tr>
	<tr>
		<td><h5>employment_levels</h5></td>
		<td><?php echo form_dropdown('employmentLevels', $dropdown_employmentLevel);?></td>
	</tr>
	</table>
	</fieldset>
	<?php echo validation_errors('<p class="error">');?>
<input type="submit" value="SUBMIT">

</form>

</fieldset>
</div>

