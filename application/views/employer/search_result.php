
<div id="result">

<fieldset>

	<legend><h2>Results</h2></legend>

<table border="1" width="600">
		<tr>
			<th><h3>Name</h3></th><th><h3>Surname</h3></th><th><h3>Preferred Job</h3></th><th><h3>View CV</h3></th><th><h3>View CV (PDF)</h3></th>
		</tr>
<?php if($records != "No records were returned") : foreach ($records as $rows) :?>
												<?php $idUser = $rows->idUser;?>
											<tr>
												<th><h5><?php echo $name = $rows->forename1; ?></h5></th>
												<th><h5><?php echo $surname = $rows->surname;?></h5></th>
												<th><h5><?php echo $prefJob = $rows->jobTitle;?></h5></th>
												<th><a href="<?php echo base_url();?>index.php/employer/empViewCV/<?php echo $idUser;?>">
												<img src="<?php echo base_url();?>images/select-icon.gif" alt="select-icon"/></a></th>
												<th><a href="<?php echo base_url();?>index.php/employer/empViewCVPDF/<?php echo $idUser;?>">
												<img src="<?php echo base_url();?>images/select-icon-pdf.gif" alt="view-pdf"/></a></th>
											</tr>
												<?php endforeach;?>
		
	<?php else : ?>
		<h2><?php print("No records were returned");?></h2>
			
<?php endif;?>

</table>

</fieldset>
</div>