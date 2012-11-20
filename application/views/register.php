<div id="register">

<h1>Registration</h1>
<form action = "<?php echo base_url()?>login/register" method="post">
	<p>
		<label for="name">Name:</label>
		<input type="text" name="name"/>
	</p>
	<p>
		<label for="surname">Surname:</label>
		<input type="text" name="surname"/>
	</p>
	<p>
		<label for="email">Email:</label>
		<input type="text" name="email"/>
	</p>
	<p>
		<label for="password">Password:</label>
		<input type="password" name="password"/>
	</p>
	<input type="submit" value="submit"/>

</form>


</div>