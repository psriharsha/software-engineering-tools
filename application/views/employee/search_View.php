
<div id="search">

<h1>EMPLOYEE SEARCH FORM</h1>
<br>
<form action ="<?php echo base_url()?>index.php/employee/search_Control/searchJobseeker" method="post">
<table>
	<tr>
		<th>skill:</th>
		<th><input type="text" name="skill" value="skill"></th> 
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
		<th><input type="text" name="qualificationType" value="qualificationType"></th>
	<tr>
		<th>experience</th>
		<th></th> 
	</tr>
	<tr>
		<th>job title</th>
		<th><?php echo form_dropdown('jobTitle', $dropdown_job);?></th>
	</tr>
	<tr>
		<th>sector</th>
		<th><?php echo form_dropdown('sectorTitle', $dropdown_sector);?></th>
	</tr>

</table>
<input type="submit" value="confirm">
</form>

<br>
<h1>RESULTS</h1>
</div>