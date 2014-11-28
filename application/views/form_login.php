<div class="container">

<h2>Login</h2>

<?php 
	echo form_open('login/authenticate',"role = 'form'");

	echo '<div class="form-group">';
	echo '<label for="usernameBlock">Username</label>';
	echo form_input('username', '', 'id = "usernameBlock" class="form-control" placeholder="Username"');
	echo '</div>';

	echo '<div class="form-group">';
	echo '<label for="passwordBlock">Password</label>';
	echo form_password('password', '', 'id = "passwordBlock" class="form-control" placeholder="Password"');
	echo '</div>';

	echo form_submit('submit', 'Login',"class = 'btn btn-primary'");

	echo form_close();
	
	echo "<br>";
	if(isset($test))
		echo '<div class="bg-danger">Username atau Password Salah.</div>';

	echo validation_errors('<div class="bg-danger">','</div>');
?>
</div>