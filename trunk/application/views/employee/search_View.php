
<div id="search">

<h1>EMPLOYEE SEARCH FORM</h1>
<br>
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

</table>
<input type="submit" value="confirm">
</form>

<br>

<h1>RESULTS</h1>

<table border="1">
		<tr>
			<th>Name</th><th>Surname</th><th>Prefered Job</th>
		</tr>
<?php if($records != "No records were returned") : foreach ($records as $rows) :?>

											<tr>
												<th><?php echo $name = $rows->forename1; ?></th>
												<th><?php echo $surname = $rows->surname;?></th>
												<th><?php echo $prefJob = $rows->jobTitle;?></th>
											</tr>
												<?php endforeach;?>
		
	<?php else : ?>
		<?php print("No records were returned");?>
			
<?php endif;?>

</table>

</div>