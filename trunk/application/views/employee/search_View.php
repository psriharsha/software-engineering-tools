
<div id="search">
<fieldset>
<legend><h2>Search form</h2></legend>
<form action ="<?php echo base_url()?>index.php/employee/search_Control/searchJobseeker" method="post">
<table>
	<tr>
		<th>skill:</th>
		<th><input type="text" name="skill" value = ""></th> 
	</tr>
	<tr>
		<th>education</th>
		<th></th>
	</tr>
	<tr>
		<th>education level:</th>
		<th><?php echo form_dropdown('educationLevel', $dropdown_education);?></th>
	</tr>
	<tr>
		<th>qualification type</th>
		<th><input type="text" name="qualificationType" value = ""></th>
	</tr>
	<tr>
		<th>experience</th>
		<th></th> 
	</tr>
	<tr>
		<th>job title</th>
		<th><?php echo form_dropdown('jobTitle', $dropdown_job);?></th>
	</tr>
	<tr>
		<th>employment_levels</th>
		<th><?php echo form_dropdown('employmentLevels', $dropdown_employmentLevel);?></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="SUBMIT"></th>
	</tr>

</table>
</form>

</fieldset>
</div>

