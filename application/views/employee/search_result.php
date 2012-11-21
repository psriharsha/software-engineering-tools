
<div id="result">

<fieldset>

	<legend><h2>Results</h2></legend>

<table border="1" width="600">
		<tr>
			<td>Name</td><td>Surname</td><td>Prefered Job</td>
		</tr>
<?php if($records != "No records were returned") : foreach ($records as $rows) :?>
												<?php $idUser = $rows->idUser;?>
											<tr>
												<td><?php echo $name = $rows->forename1; ?></td>
												<td><?php echo $surname = $rows->surname;?></td>
												<td><?php echo $prefJob = $rows->jobTitle;?></td>
												<td><?php echo anchor(base_url()."index.php/employee/ViewCV/".$idUser,'select');?></td>
											</tr>
												<?php endforeach;?>
		
	<?php else : ?>
		<?php print("No records were returned");?>
			
<?php endif;?>

</table>

</fieldset>
</div>