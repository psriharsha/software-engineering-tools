<div id="manage">
<?php echo validation_errors('<p class="error">');?>
<form action="<?php echo base_url()?>index.php/employer/manage_controller/inputJob" method="post">
<fieldset>

<legend><h2>Job</h2></legend>
<table>	
	<tr>
		<td><h5>Job_title:</h5></td>
		<td><input type="text" name="job" value=""/></td>
	</tr>
	<tr>
		<tr>
		<td><h5>Job_sector:</h5></td>
		<td><?php echo form_dropdown('sector', $dropdown_sectors);?></td>
	</tr>
	<tr>
		<tr>
		<td></td>
		<td><input type="text" name="sectorTxt" value=""/></td>
	</tr>
</table>
	<input type="submit" value="SUBMIT"/>
</fieldset>
</form>

<form action="<?php echo base_url()?>index.php/employer/manage_controller/inputEducation" method="post">
<fieldset>
<legend><h2>Education</h2></legend>
<table>	
	<tr>
		<td><h5>Eduction_level:</h5></td>
		<td><input type="text" name="eduLevel" value=""/></td>
	</tr>
</table>
	<input type="submit" value="SUBMIT"/>
</fieldset>
</form>

<form action="<?php echo base_url()?>index.php/employer/manage_controller/inputExperience" method="post">
<fieldset>
<legend><h2>Experience</h2></legend>
<table>	
	<tr>
		<td><h5>Employment_level:</h5></td>
		<td><input type="text" name="empLevel" value=""/></td>
	</tr>
</table>
	<input type="submit" value="SUBMIT"/>
</fieldset>
</form>
</div>