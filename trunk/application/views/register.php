<div id="register">

<h2>Register</h2>
	<?php echo form_open(base_url()."index.php/login/register")?>
	<h5>Name:</h5><?php echo form_input('name',set_value('first_name','First Name'));?>
	<h5>Surname:</h5><?php	echo form_input('surname', set_value('surname','Surname')); ?>
	<h5>email:</h5>	<?php echo form_input('username',set_value('username','xxx@email.com')); ?>
	<h5>password:</h5> <?php	echo form_password('password','password') ?>
	<h5>password confirmation:</h5> <?php	echo form_password('password2','password2') ?>
		       <?php echo form_submit('submit','Create Account');?>
				<a href="<?php echo base_url();?>index.php">Back</a>
	<?php echo validation_errors('<p class="error">');?>


</div>

