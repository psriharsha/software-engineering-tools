
<div id="login">

<h2>Login</h2>
<div id="loginError">
	<?php if($error!=null)
			echo $error; ?>
</div>
<?php 
	
	echo form_open(base_url()."index.php/login/validate_credentials");
	echo form_input('username','Username');
	echo form_password('password','Password');
	echo form_submit('submit','Login');
	
	echo anchor(base_url()."index.php/login/signup",'Create Account');
	
	?>

</div>