
<div id="search">
<fieldset>
<legend><h2>Search form</h2></legend>
<form action ="<?php echo base_url()?>index.php/employee/search_Control/searchJobseeker" method="post">
	<fieldset>
	<legend><h3>Educational</h3></legend>
	<table id="education" width="600">
	<tr>
		<td>education level:</td>
		<td><?php echo form_dropdown('educationLevel', $dropdown_education);?></th>
	</tr>
	<tr>
		<td>qualification type</td>
		<td><input type="text" name="qualificationType" value = ""></td>
	</tr>
	</table>
	</fieldset>
	
	<fieldset>
	<legend><h3>Qualification</h3></legend>
	<table id="qualification" width="550">
	<tr>
		<td>skill:</td>
		<td><input type="text" name="skill" value = ""></td> 
	</tr>
	<tr>
		<td>experience</td>
		<td></td> 
	</tr>
	<tr>
		<td>job title</td>
		<td><?php echo form_dropdown('jobTitle', $dropdown_job);?></td>
	</tr>
	<tr>
		<td>employment_levels</td>
		<td><?php echo form_dropdown('employmentLevels', $dropdown_employmentLevel);?></td>
	</tr>
	</table>
	</fieldset>
<input type="submit" value="SUBMIT">

</form>

</fieldset>
</div>

