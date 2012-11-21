<div id="register">

<fieldset>
	<legend><h2>Register</h2></legend>
	<?php echo form_open(base_url()."index.php/login/register")?>
	Name:<?php echo form_input('name',set_value('first_name','First Name'));?>
	Surname:<?php	echo form_input('surname', set_value('surname','Surname')); ?>
	email:	<?php echo form_input('username',set_value('username','xxx@email.com')); ?>
	password: <?php	echo form_password('password','password') ?>
		       <?php echo form_submit('submit','Create Account');?>
</fieldset>

</div>

